<?php


class AdministradorsController
{
    //Incuimos los modelos que vamos a utilizar
    public function __construct()
    {
        require_once "Models/AdministradorsModel.php";
    }
    
    public function index()
    {
        session_start();
        if (isset($_SESSION['id_usuario'])){
            require_once "Views/administrador/index.php";
        }else {
            header('Location: index.php?c=Usuarios&a=login');
            exit; // Asegúrate de que el script se detiene después de la redirección
        }
    }
    
    public function registro()
{
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $data = $_POST;

        // Sanitizar y validar los datos recibidos
        $nombreMentor = filter_var(trim($data['nombreMentor']), FILTER_SANITIZE_STRING);
        //$areaMentor = filter_var(trim($data['areaMentor']), FILTER_SANITIZE_STRING);
        $correoMentor = filter_var(trim($data['correoMentor']), FILTER_SANITIZE_EMAIL);
        $tipoMentor = filter_var(trim($data['tipoMentor']), FILTER_SANITIZE_STRING);
        $telefonoMentor = filter_var(trim($data['telefonoMentor']), FILTER_SANITIZE_STRING);
        $acercaMentor = filter_var(trim($data['acercaMentor']), FILTER_SANITIZE_STRING);
        $cursoId = filter_var(trim($data['cursoId']), FILTER_SANITIZE_NUMBER_INT);
        
        $areaMentor = "No es necesario";

        // Validar los datos antes de procesar
        $errores = [];
        if (empty($nombreMentor) || preg_match("/\d/", $nombreMentor)) {
            $errores['nombreMentor'] = "Favor de ingresar un nombre válido";
        }

        /**
        if (empty($areaMentor)) {
            $errores['areaMentor'] = "Favor de ingresar un área válida";
        }
        */

        if (empty($correoMentor) || !filter_var($correoMentor, FILTER_VALIDATE_EMAIL)) {
            $errores['correoMentor'] = "Favor de ingresar un correo válido";
        }

        if (empty($tipoMentor)) {
            $errores['tipoMentor'] = "Favor de ingresar un curso o asesoría";
        }

        if (empty($telefonoMentor) || strlen($telefonoMentor) < 9) {
            $errores['telefonoMentor'] = "Favor de ingresar un número de teléfono válido";
        }

        if (empty($acercaMentor)) {
            $errores['acercaMentor'] = "Favor de ingresar información y hobbies del mentor";
        }
        
         if (empty($cursoId)) {
            $errores['cursoId'] = "Favor de seleccionar un curso válido";
        }


        if (!empty($errores)) {
            http_response_code(400); // Bad request
            echo json_encode(['success' => false, 'error' => $errores]);
            exit;
        }

        // Manejar la subida de la foto
        if (isset($_FILES['fotoMentorPerfil']) && $_FILES['fotoMentorPerfil']['error'] === UPLOAD_ERR_OK) {
            $fileTmpPath = $_FILES['fotoMentorPerfil']['tmp_name'];
            $fileName = $_FILES['fotoMentorPerfil']['name'];

            // Obtener solo el nombre del archivo sin la extensión
            $fileInfo = pathinfo($fileName);
            $nombreArchivo = $fileInfo['filename'];

            // Directorio de subida principal
            $uploadFileDir = './public/images/docente/';

            // Crear el directorio si no existe
            if (!file_exists($uploadFileDir . $nombreArchivo)) {
                mkdir($uploadFileDir . $nombreArchivo, 0777, true); // Crear directorio recursivamente
            }

            // Ruta completa para guardar la imagen
            $dest_path = $uploadFileDir . $nombreArchivo . '/' . $fileName;

            if(move_uploaded_file($fileTmpPath, $dest_path)) {
                $fotoURL = $nombreArchivo; // Guardar solo el nombre base del archivo
            } else {
                $errores['fotoMentor'] = "Error al subir la foto.";
                http_response_code(500); // Internal Server Error
                echo json_encode(['success' => false, 'error' => $errores]);
                exit;
            }
        } else {
            $fotoURL = NULL; // Si no se subió ninguna foto
        }
        
        // Manejar la subida de la foto tarjeta
        if (isset($_FILES['fotoMentorTarjeta']) && $_FILES['fotoMentorTarjeta']['error'] === UPLOAD_ERR_OK) {
            $fileTmpPath = $_FILES['fotoMentorTarjeta']['tmp_name'];
            $fileName = $_FILES['fotoMentorTarjeta']['name'];

            // Ruta completa para guardar la imagen de tarjeta
            $dest_path_tarjeta = $uploadFileDir . $nombreArchivo . '/' . $fileName;

            if(move_uploaded_file($fileTmpPath, $dest_path_tarjeta)) {
                // No necesitas guardar la URL en la base de datos, solo se guarda en el mismo directorio
            } else {
                $errores['fotoMentorTarjeta'] = "Error al subir la foto de tarjeta.";
                http_response_code(500); // Internal Server Error
                echo json_encode(['success' => false, 'error' => $errores]);
                exit;
            }
        }

        // Manejar la subida de la foto portada
        if (isset($_FILES['fotoMentorPortada']) && $_FILES['fotoMentorPortada']['error'] === UPLOAD_ERR_OK) {
            $fileTmpPath = $_FILES['fotoMentorPortada']['tmp_name'];
            $fileName = $_FILES['fotoMentorPortada']['name'];

            // Ruta completa para guardar la imagen de portada
            $dest_path_portada = $uploadFileDir . $nombreArchivo . '/' . $fileName;

            if(move_uploaded_file($fileTmpPath, $dest_path_portada)) {
                // No necesitas guardar la URL en la base de datos, solo se guarda en el mismo directorio
            } else {
                $errores['fotoMentorPortada'] = "Error al subir la foto de portada.";
                http_response_code(500); // Internal Server Error
                echo json_encode(['success' => false, 'error' => $errores]);
                exit;
            }
        }


        // Aquí puedes proceder a almacenar los datos en la base de datos
        // Ejemplo de inserción en la base de datos:
        $model = new AdministradorModel();
        $confirmarID = $model->informacionMentor($correoMentor);
        if ($confirmarID) {
            $asignacionCursoConfirma = $model->asignacionCursoMentor($confirmarID, $cursoId);
            //AQUI PODRIA HACER UN UPDATE AL MODELO PARA ACTUALIZAR SUS DATOS DEL MENTOR
            $mensaje = "¡Mentor registrado exitosamente!";
        } else {
            $mensaje = $model->insertarMentor($nombreMentor, $areaMentor, $correoMentor, $tipoMentor, $telefonoMentor, $acercaMentor, $fotoURL);
            //Buscar idMentor
            $idMentor = $model->informacionMentor($correoMentor);
            if ($idMentor) {
                //Se inserta en la tabla mentor_login
                $model->loginMentor($idMentor, $correoMentor);
            }
            $asignacionCurso = $model->asignacionCursoMentor($idMentor, $cursoId);
        }
        

        if ($mensaje === "¡Mentor registrado exitosamente!") {
            // Preparar respuesta JSON
            $response = [
                'success' => true,
                'message' => $mensaje,
            ];

            echo json_encode($response);
            exit;
        } else {
            http_response_code(500); // Internal Server Error
            echo json_encode(['success' => false, 'error' => $mensaje]);
            exit;
        }
    }
}

     public function vistaInscripciones()
    {
        require_once "Views/administrador/inscripcion/vistaInscripcion.php";
    }
    
     public function inscripcion()
    {
        if (isset($_GET['id'])) {
            $idAdministrador = $_GET['id'];
            $model = new AdministradorModel();
            $getInscripcion = $model->getAllInscripcion();

            header('Content-Type: application/json');
            echo json_encode($getInscripcion);
        } else {
            echo json_encode(["error" => "No se proporcionó el ID del maestro"]);
        }
    }
    
    public function confirmar()
{
    
    // Asegurarse de que se está usando POST para la solicitud
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Capturar los datos del cuerpo de la solicitud JSON
        $data = json_decode(file_get_contents('php://input'), true);

        // Verificar si los datos vienen en formato JSON
        if ($data) {
            $idInscripcion = $data['idInscripcion'];

            $model = new AdministradorModel();
            $resultado = $model->insertaInscripcion($idInscripcion);

            header('Content-Type: application/json');
            echo json_encode($resultado);
        } else {
            // Si no hay datos JSON, devolver un error
            echo json_encode(["error" => "No se proporcionaron los datos necesarios"]);
        }
    } else {
        // Si no es una solicitud POST, devolver un error
        header('HTTP/1.1 405 Method Not Allowed');
        echo json_encode(["error" => "Método no permitido"]);
    }
}

    public function allCursos()
    {
            $model = new AdministradorModel();
            $cursos = $model->getAllCursosA();

            header('Content-Type: application/json');
            echo json_encode($cursos);
    }


     private function isAjaxRequest()
    {
        return isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) === 'xmlhttprequest';
    }
    

}
