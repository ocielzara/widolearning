<?php


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once 'PHPMailer/Exception.php';
require_once 'PHPMailer/PHPMailer.php';
require_once 'PHPMailer/SMTP.php';


class AdministradorsController
{
    //Incuimos los modelos que vamos a utilizar
    public function __construct()
    {
        require_once "Models/AdministradorsModel.php";
        require_once "Models/UsuariosModel.php";
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
        
            // Obtener todos los usuarios activos
            $usuariosActivos = $model->getAllUsuariosA(); // Llamada a la función que recupera los usuarios activos

            // Extraer los correos electrónicos de los usuarios
            $correosUsuarios = [];
            foreach ($usuariosActivos as $usuario) {
                $correosUsuarios[] = $usuario['correo_electronico'];
            }
            
            
            $cursoNombre = $model->getCursoNombreById($cursoId);
            
            // Llamar a la función para enviar el correo
            $this->enviarCorreo($nombreMentor, $cursoNombre, $correosUsuarios);
        

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

    public function crearAsignacion() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $mentorId = $_POST['mentor'] ?? null;
            $cursoId = $_POST['curso'] ?? null;
            if ($mentorId === null || $cursoId === null) {
                // Validar que los datos estén presentes
                header('Content-Type: application/json');
                echo json_encode(['error' => 'Faltan datos necesarios']);
                return;
            }

        // Llamar al modelo para crear la asignación
        $asignacionModel = new AdministradorModel();
        $resultado = $asignacionModel->crearAsignacionModel($mentorId, $cursoId);

        header('Content-Type: application/json');
        echo json_encode($resultado);
        } else {
        header('HTTP/1.1 405 Method Not Allowed');
        echo json_encode(['error' => 'Método no permitido']);
        }
    }
    
    //OPERACION ACTUALIZACION
    public function updateUsuario()
    {
        session_start();
        
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $json_data = file_get_contents('php://input');
            $data = json_decode($json_data, true);

            $nombre = strtolower($data['nombre']);
            $edad = $data['edad'];
            $telefono = $data['telefono'];
            $correo = filter_var($data['correo'], FILTER_SANITIZE_EMAIL);
            $interesesSeleccionados = $data['intereses'];
            $interesesComoTexto = implode(" ", $interesesSeleccionados);
            $idUsuario = $data['idUsuario'];

            $model = new UsuarioModel();
            $mensaje = $model->updateUsuario($nombre, $correo, $edad, $telefono, $interesesComoTexto, $idUsuario);
            header('Content-Type: application/json');
            if ($mensaje === "La actualizacion fue exitosa") {
                
               // En lugar de redirigir aquí, responde con el éxito y la URL
                $response = array(
                    'success' => true,
                    'message' => 'Actualizacion exitosa',
                    'redirect' => 'index.php?c=Administradors&a=vistaUsuarios&id=' . $_SESSION['id_usuario']
                );

                echo json_encode($response);
                exit;
            } else {
                // Hubo un problema durante el registro
                $_SESSION['mensaje_registro'] = $mensaje;
                echo json_encode(array('success' => false, 'error' => $mensaje));
                exit;
            }
        } else {
            header('Location: index.php');
            exit;
        }
    }
    
    

    //CARGAR VISTA
     public function vistaInscripciones()
    {
        session_start();
        require_once "Views/administrador/inscripcion/vistaInscripcion.php";
    }
    
    //CARGAR VISTA
    public function vistaAsignaciones()
    {
        session_start();
        require_once "Views/administrador/asignacion/vistaAsignaciones.php";
    }
    
    //CARGAR VISTA
    public function vistaMentores()
    {
        session_start();
        require_once "Views/administrador/mentor/vistaMentores.php";
    }
    
    //CARGAR VISTA
    public function vistaUsuarios()
    {
        session_start();
        require_once "Views/administrador/usuario/vistaUsuarios.php";
    }
    
    //CARGAR VISTA
    public function vistaAprendizajes()
    {
        session_start();
        require_once "Views/administrador/aprendizaje/vistaAprendizajes.php";
    }
    
    //CARGAR VISTA
    public function crearAsignacionVista()
    {
        require_once "Views/administrador/asignacion/crearAsignaciones.php";
    }
    
    //CARGAR VISTA
    public function crearMentorVista()
    {
        require_once "Views/administrador/mentor/crearMentores.php";
    }
    
    //CARGA VISTA
    public function edit()
    {
        require_once "Views/administrador/usuario/edit.php";
     
    }
    
    //REGRESA INFORMACION
    public function consultaUsuario()
    {
        if (isset($_GET['idUsuario'])) {
            $idUsuario = $_GET['idUsuario'];
            $model = new UsuarioModel();
            $get = $model->getUsuario($idUsuario);

            header('Content-Type: application/json');
            echo json_encode($get);
        } else {
            echo json_encode(["error" => "No se proporcionó el ID"]);
        }
    }
    
    //REGRESAR INFORMACION 
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
    
    //REGRESAR INFORMACION 
    public function asignacion()
    {
        if (isset($_GET['id'])) {
            $idAdministrador = $_GET['id'];
            $model = new AdministradorModel();
            $getAsignacion = $model->getMentoresYCursos();

            header('Content-Type: application/json');
            echo json_encode($getAsignacion);
        } else {
            echo json_encode(["error" => "No se proporcionó el ID del maestro"]);
        }
    }
    
    //REGRESAR INFORMACION 
    public function cursoYmentor()
    {
        if (isset($_GET['id'])) {
            $idAdministrador = $_GET['id'];
            $model = new AdministradorModel();
            $getMentor = $model->getAllMentoresA();
            $getCurso = $model->getAllCursosA();
            
            // Combina los resultados en un array
            $response = [
                "mentores" => $getMentor,
                "cursos" => $getCurso
            ];

            header('Content-Type: application/json');
            echo json_encode($response);
        } else {
            echo json_encode(["error" => "No se proporcionó el ID del maestro"]);
        }
    }
    
    //REGRESAR INFORMACION 
    public function mentor()
    {
        if (isset($_GET['id'])) {
            $idAdministrador = $_GET['id'];
            $model = new AdministradorModel();
            $getMentor = $model->getAllMentoresA();

            header('Content-Type: application/json');
            echo json_encode($getMentor);
        } else {
            echo json_encode(["error" => "No se proporcionó el ID del maestro"]);
        }
    }
    
    //REGRESAR INFORMACION 
    public function usuario()
    {
        if (isset($_GET['id'])) {
            $idAdministrador = $_GET['id'];
            $model = new AdministradorModel();
            $getUsuario = $model->getAllUsuariosA();

            header('Content-Type: application/json');
            echo json_encode($getUsuario);
        } else {
            echo json_encode(["error" => "No se proporcionó el ID del maestro"]);
        }
    }
    
    //REGRESAR INFORMACION 
    public function aprendizaje()
    {
        if (isset($_GET['id'])) {
            $idAdministrador = $_GET['id'];
            $model = new AdministradorModel();
            $getAprendizaje = $model->getAllAprendizajeA();

            header('Content-Type: application/json');
            echo json_encode($getAprendizaje);
        } else {
            echo json_encode(["error" => "No se proporcionó el ID del maestro"]);
        }
    }
    
    //REGRESAR INFORMACION 
    public function totalUsuario()
    {
        
        $model = new AdministradorModel();
        $getTotal = $model->getNumerosTotalA();

        header('Content-Type: application/json');
        echo json_encode($getTotal);
    }
    
    //REGRESAR INFORMACION 
    public function cursoTop()
    {
        
        $model = new AdministradorModel();
        $getTop = $model->getTopCursos();

        header('Content-Type: application/json');
        echo json_encode($getTop);
    }
    
    //REGRESAR INFORMACION
     public function mentorTop()
    {
        
        $model = new AdministradorModel();
        $getTop = $model->getTopMentores();

        header('Content-Type: application/json');
        echo json_encode($getTop);
    }
    
    //REGRESAR INFORMACION
    public function interesUsuario()
    {
        
        $model = new AdministradorModel();
        $interesesActivos = $model->getAllInteresesActivos();
        
        // Procesar los intereses para contar su frecuencia
        $conteoIntereses = $this->contarIntereses($interesesActivos);

        // Devolver los intereses contados en formato JSON
        header('Content-Type: application/json');
        echo json_encode($conteoIntereses);
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


//ELIMINAR ASIGNACION

public function eliminarAsignacion()
{
    
    // Asegurarse de que se está usando POST para la solicitud
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Capturar los datos del cuerpo de la solicitud JSON
        $data = json_decode(file_get_contents('php://input'), true);

        // Verificar si los datos vienen en formato JSON
        if ($data && isset($data['idMentor']) && isset($data['idCurso'])) {
            $idMentor = $data['idMentor'];
            $idCurso = $data['idCurso'];

            $model = new AdministradorModel();
            $resultado = $model->eliminarAsignacion($idMentor, $idCurso);

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

//ELIMINAR MENTOR

public function eliminarMentor()
{
    
    // Asegurarse de que se está usando POST para la solicitud
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Capturar los datos del cuerpo de la solicitud JSON
        $data = json_decode(file_get_contents('php://input'), true);

        // Verificar si los datos vienen en formato JSON
        if ($data && isset($data['idMentor'])) {
            $idMentor = $data['idMentor'];

            $model = new AdministradorModel();
            $resultado = $model->eliminarMentor($idMentor);

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


//ELIMINAR USUARIO
public function eliminarUsuario()
{
    
    // Asegurarse de que se está usando POST para la solicitud
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Capturar los datos del cuerpo de la solicitud JSON
        $data = json_decode(file_get_contents('php://input'), true);

        // Verificar si los datos vienen en formato JSON
        if ($data && isset($data['idUsuario'])) {
            $idUsuario = $data['idUsuario'];

            $model = new AdministradorModel();
            $resultado = $model->eliminarUsuario($idUsuario);

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
    
    
// OTRAS
public function contarIntereses($interesesActivos)
{
    // Inicializar un array para contar la frecuencia de cada interés
    $conteoIntereses = array();

    // Función para normalizar intereses
    function normalizarInteres($interes) {
        // Convertir a minúsculas
        $interes = strtolower($interes);
        // Remover acentos
        $interes = str_replace(
            ['á', 'é', 'í', 'ó', 'ú', 'ñ', 'ü'],
            ['a', 'e', 'i', 'o', 'u', 'n', 'u'],
            $interes
        );
        return $interes;
    }

    // Recorrer cada cadena de intereses
    foreach ($interesesActivos as $interes) {
        // Normalizar la cadena a minúsculas
        $interes = strtolower($interes);
        
        // Dividir los intereses por comas o espacios
        $interesesSeparados = preg_split('/\s*,\s*|\s+/', $interes); 

        // Recorrer cada interés individual
        foreach ($interesesSeparados as $interesIndividual) {
            $interesIndividual = trim($interesIndividual); // Eliminar espacios en blanco
            // Normalizar el interés
            $interesIndividual = normalizarInteres($interesIndividual); 

            // Si el interés ya está en el array, incrementar su contador
            if (array_key_exists($interesIndividual, $conteoIntereses)) {
                $conteoIntereses[$interesIndividual]++;
            } else {
                // Si no está en el array, añadirlo con un contador inicial de 1
                $conteoIntereses[$interesIndividual] = 1;
            }
        }
    }

    // Ordenar los intereses de mayor a menor
    arsort($conteoIntereses);

    return $conteoIntereses;
}

public function enviarCorreo($nombre, $curso, $correos)
    {
        try {
            $mail = new PHPMailer(true);

            $mail->SMTPDebug = 0;
            $mail->isSMTP();
            $mail->Host = 'smtp.hostinger.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'hola@widolearn.com';
            $mail->Password = 'Wido2024!';
            $mail->SMTPSecure = 'ssl';
            $mail->Port = 465;
            $mail->setFrom('hola@widolearn.com', 'Wido');
            $correoDefecto = "hola@widolearn.com";
            $mail->addAddress($correoDefecto);
            
            // Dirección de correos
            // Agregar direcciones de correo de los usuarios
            foreach ($correos as $correoUsuario) {
                $mail->addAddress($correoUsuario);
            }
            
            $htmlContent = file_get_contents('Views/contenido/correo-nuevo-mentor.php');

            $htmlContent = str_replace('{{MENTOR_NAME}}', htmlspecialchars($nombre), $htmlContent);
            $htmlContent = str_replace('{{CURSO_NAME}}', htmlspecialchars($curso), $htmlContent);
           

            $mail->isHTML(true);
            $mail->Subject = 'Curso Agendado';
            $mail->Body = $htmlContent;
            
            //Activamos caracteres de latinos
            $mail->CharSet = 'UTF-8';

            $mail->send();

            
            
        } catch (Exception $e) {
            echo "Error al enviar el correo de recuperación: {$e->getMessage()}";
        }
    }






     private function isAjaxRequest()
    {
        return isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) === 'xmlhttprequest';
    }
    

}

?>
