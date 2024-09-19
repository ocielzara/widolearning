<?php

use function PHPSTORM_META\map;

class DocentesController
{
    private $docenteModel;

    public function __construct()
    {
        require_once "Models/DocentesModel.php";
    }

    // Muestra el formulario de inicio de sesión
    public function login()
    {
        require_once "Views/login/indexDocente.php";
    }

    public function iniciarSesion()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Capturar datos JSON del cuerpo de la solicitud
            $data = json_decode(file_get_contents('php://input'), true);

            // Verificar si los datos vienen en formato JSON
            if ($data) {
                $correo = $data['correo'];
                $contrasena = $data['contrasena'];
            } else {
                // Si no hay datos JSON, obtener los datos del formulario
                $correo = $_POST['correo'] ?? null;
                $contrasena = $_POST['contrasena'] ?? null;
            }

            if ($correo && $contrasena) {
                $model = new DocenteModel();
                $usuario = $model->validarDocente($correo, $contrasena);
                if ($usuario) {
                    session_start();
                    $_SESSION['mentor_id'] = $usuario['Mentor_ID'];
                    $_SESSION['nombre'] = $usuario['Nombre'];
                    
                    header("Location: index.php?c=Docentes&a=conseguirID");
                    exit();
                } else {
                    echo "Correo o contraseña incorrectos";
                }
            } else {
                echo "Faltan datos en la solicitud.";
            }
        } else {
            // Si no es un método POST, redirigir al formulario de inicio de sesión
            header('Location: index.php?c=Docentes&a=login');
            exit();
        }
    }
    
    
    public function conseguirID()
    {
    session_start();
    if (!isset($_SESSION['mentor_id'])) {
        header('Location: index.php?c=Docentes&a=login');
        exit();
    }

    $mentorId = $_SESSION['mentor_id'];
    
    // Aquí rediriges a la URL con el mentorId incluido
    header('Location: index.php?c=Docentes&a=index&mentorId=' . $mentorId);
    exit();
    }

public function index()
{
    session_start();
    if (!isset($_SESSION['mentor_id'])) {
        header('Location: index.php?c=Docentes&a=login');
        exit();
    }

    $model = new DocenteModel();
    $mentorId = $_SESSION['mentor_id'];
    $mentorInfo = $model->disponibilidadMaestro($mentorId);
    
    require_once "Views/docente/index.php";
}

 public function indexApp() {
        session_start();
        if (!isset($_SESSION['mentor_id'])) {
            header('Location: index.php?c=Docentes&a=login');
            exit();
        }

        $model = new DocenteModel();
        $mentorId = $_SESSION['mentor_id'];
        $mentorInfo = $model->disponibilidadMaestro($mentorId);
        
            header('Content-Type: application/json');
            echo json_encode($mentorInfo);
            exit(); 
    }

    public function loginApp() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $data = json_decode(file_get_contents('php://input'), true);

            if ($data) {
                $correo = $data['correo'];
                $contrasena = $data['contrasena'];
            } else {
                $correo = $_POST['correo'] ?? null;
                $contrasena = $_POST['contrasena'] ?? null;
            }

            if ($correo && $contrasena) {
                $model = new DocenteModel();
                $usuario = $model->validarDocente($correo, $contrasena);
                if ($usuario) {
                    session_start();
                    $_SESSION['mentor_id'] = $usuario['Mentor_ID'];
                    $_SESSION['nombre'] = $usuario['Nombre'];
                    
                    header('Content-Type: application/json');
                    $response = array(
                        'success' => true,
                        'mentor_id' => $usuario['Mentor_ID'],
                        'nombre' => $usuario['Nombre'],
                        'message' => "Inicio de sesión exitoso!"
                    );
                    echo json_encode($response);
                    exit();
                } 
            } else {
                echo "Faltan datos en la solicitud.";
            }
        } else {
            header('Location: index.php?c=Docentes&a=login');
            exit();
        }
    }


  public function indexJson()
{
    if (isset($_GET['mentorId'])) {
            $idMaestro = $_GET['mentorId'];
            $model = new DocenteModel();
            $mentorDisponibilidad = $model->disponibilidadMaestro($idMaestro);

            header('Content-Type: application/json');
            echo json_encode($mentorDisponibilidad);
        } else {
            echo json_encode(["error" => "No se proporcionó el ID del maestro"]);
        }
}

    public function informacionDocente($id)
    {
        $docente = new DocenteModel();
        return $docente->informacionDocente($id);
    }
    public function cerrarSesion()
    {
        // Verificar si se ha iniciado una sesión
        session_start();

        // Comprobar si se ha enviado una solicitud POST para cerrar sesión
        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['cerrar_sesion'])) {
            // Destruir la sesión actual
            session_destroy();

            // Redirigir a la página de inicio de sesión o a otra página relevante
            header("Location: index.php");
            exit; // Importante para asegurarse de que no se ejecute más código después de la redirección
        }
    }

    public function perfilDocente()
    {
        $nombre = $_POST['nombre'];

        $docente = new DocenteModel();
        $informacion = $docente->informacionDocente($nombre);
        if ($informacion) {
            $idDocente = $informacion['id_maestro'];
            $nombreDocente = $informacion['nombre'];
            $fotoDocente = $informacion['foto'];
            $descripcionDocente = $informacion['descripcion'];
            $areasDocente = $informacion['areas'];
            $hobiesDocente = $informacion['hobies'];

            // Reemplazar los guiones por saltos de línea
            $texto_con_saltos_areasDocente = str_replace('-', "\n", $areasDocente);
            // Reemplazar los guiones por saltos de línea
            $texto_con_saltos_hobiesDocente = str_replace('-', "\n", $hobiesDocente);

            // Obtener todas las fotos de los cursos asignados al docente
            $informacionCursos = $docente->cursosAsignados($nombre);

            // Verificar si se encontraron cursos asignados
            if ($informacionCursos) {
                // Inicializar un array para almacenar las fotos de los cursos
                $fotosCursos = array();

                // Iterar sobre los resultados de los cursos asignados
                foreach ($informacionCursos as $curso) {
                    // Agregar la foto del curso al array de fotos de cursos 
                    $fotosCursos[] = $curso['foto'];
                }
            } else {
                // Si no se encontraron cursos asignados, inicializar el array como vacío
                $fotosCursos = array();
            }

            //Obetenemos los dias y horarios disponibles del maestro
            $informacionDisponibilidad = $docente->disponibilidadMaestro($idDocente);
            // Inicializar un array para almacenar las fechas disponibles
            $fechasDisponibles = array();
            $fechasHorasDisponibles = array();

            // Verificar si hay disponibilidad antes de intentar iterar sobre ella
            if (is_array($informacionDisponibilidad) && count($informacionDisponibilidad) > 0) {
                // Iterar sobre las fechas disponibles y agregarlas al array
                foreach ($informacionDisponibilidad as $disponibilidad) {
                    $fechasDisponibles[] = $disponibilidad['fecha'];
                }

                // Iterar sobre las fechas disponibles y agregarlas al array
                foreach ($informacionDisponibilidad as $disponibilidad) {
                    // Agregar tanto la fecha como la hora al array
                    $fechasHorasDisponibles[] = array(
                        $disponibilidad['fecha'],
                        $disponibilidad['hora']
                    );
                }
            } else {
                // Si no hay disponibilidad, inicializar los arrays como vacíos
                $fechasDisponibles = [];
                $fechasHorasDisponibles = [];
            }

            require_once "Views/docente/perfilDocente.php";
        } else {
            //require_once "Views/docente/index.php";
            require_once "Views/docente/perfilDocente.php";
        }
    }

    public function agendaIndex()
    {
        require_once "Views/docente/agenda/crear.php";
    }

    public function agendaCrear()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $dia_semana = $_POST['dia_semana'];
            $time = $_POST['hora'];
            $id = $_POST['id_maestro'];
            $model = new DocenteModel();
            if ($model->insertarDisponibilidad($id, $dia_semana, $time)) {
                header("location: index.php?c=Docentes&a=index");
            } else {
                echo "Error al registrar la disponibilidad.";
            }
        } else {
            // Redirigir si se intenta acceder directamente a través de GET
            header('Location: index.php');
        }
    }
    
public function agendaCrearApp()
{
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $input = file_get_contents('php://input');
        $data = json_decode($input, true);

        // Depuración: Verificar el contenido de $data
        error_log(print_r($data, true));

        if (isset($data['dia_semana']) && isset($data['hora']) && isset($data['id_maestro'])) {
            $dia_semana = $data['dia_semana'];
            $time = $data['hora'];
            $id = $data['id_maestro'];
            $model = new DocenteModel();
            if ($model->insertarDisponibilidad($id, $dia_semana, $time)) {
                header('Content-Type: application/json');
                $response = array(
                    'success' => true,
                    'message' => "Registro Exitoso"
                );
                echo json_encode($response);
                exit();
            } else {
                header('Content-Type: application/json');
                $response = array(
                    'success' => false,
                    'message' => "Error al registrar"
                );
                echo json_encode($response);
                exit();
            }
        } else {
            // Claves faltantes en $data
            header('Content-Type: application/json');
            $response = array(
                'success' => false,
                'message' => "Datos incompletos en la solicitud"
            );
            echo json_encode($response);
            exit();
        }
    } else {
        // Redirigir si se intenta acceder directamente a través de GET
        header('Location: index.php');
    }
}



    public function agendaEliminar()
    {

        $id_disponibilidad = $_GET['id'];

        // Procesar los datos, por ejemplo, guardarlos en la base de datos
        $model = new DocenteModel();
        if ($model->eliminarDisponibilidad($id_disponibilidad)) {
            // Redirigir a alguna página después de registrar al usuario
            header("location:  index.php?c=Docentes&a=index");
        } else {
            // Manejar el caso en que la inserción falla
            // Esto podría implicar mostrar un mensaje de error al usuario o redirigirlo a otra página
            // Por ejemplo:
            echo "Error al registrar el usuario.";
        }
    }
    public function agendaEliminarApp()
    {
        $id_disponibilidad = $_GET['id'];
        $model = new DocenteModel();
        if ($model->eliminarDisponibilidad($id_disponibilidad)) {
            header('Content-Type: application/json');
                $response = array(
                    'success' => true,
                    'message' => "Eliminado Correctamente"
                );
                echo json_encode($response);
                exit();
        } else {
  
             header('Content-Type: application/json');
                $response = array(
                    'success' => false,
                    'message' => "Fallo al eliminar registro"
                );
                echo json_encode($response);
                exit();
        }
    }

    public function agendaEditar()
    {
        $id_disponibilidad = $_GET['id'];
        $model = new DocenteModel();
        $informacion = $model->obtenerFechaPorId($id_disponibilidad);
        if ($informacion) {
            // Redirigir a alguna página después de registrar al usuario
            $fecha = $informacion['dia_semana'];
            $hora = $informacion['hora'];
            require_once "Views/docente/agenda/editar.php";
        } else {
            echo "Error al registrar el usuario.";
        }
    }

    public function actualizarDisponibilidad()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $date = $_POST['nuevaFecha'];
            $time = $_POST['nuevaHora'];

            $id = $_POST['id'];
            $model = new DocenteModel();
            if ($model->actualizarDisponibilidad($id, $date, $time)) {
                header("Location: index.php?c=Docentes&a=index");
            } else {
                echo "Error al actualizar la disponibilidad.";
            }
        } else {
            header('Location: index.php');
        }
    }

 public function actualizarDisponibilidadApp()
{
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $json = file_get_contents('php://input');
        $data = json_decode($json, true);

        if (isset($data['nuevaFecha'], $data['nuevaHora'], $data['id'])) {
            $date = $data['nuevaFecha'];
            $time = $data['nuevaHora'];
            $id = $data['id'];

            $model = new DocenteModel();

            if ($model->actualizarDisponibilidad($id, $date, $time)) {
                header('Content-Type: application/json');
                $response = array(
                    'success' => true,
                    'message' => "Horario actualizado correctamente"
                );
                echo json_encode($response);
                exit();
            } else {
                header('Content-Type: application/json');
                $response = array(
                    'success' => false,
                    'message' => "Error al actualizar la disponibilidad."
                );
                echo json_encode($response);
                exit();
            }
        } else {
            // Maneja el caso en el que faltan claves en el array decodificado
            header('Content-Type: application/json');
            $response = array(
                'success' => false,
                'message' => "Datos faltantes en la solicitud."
            );
            echo json_encode($response);
            exit();
        }
    }
}

    
    public function confirmarCita()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Validar y sanar los datos de entrada
            $idUsuario = $_POST['idUsuario'];
            $fecha = $_POST['fecha'];

            // Aquí se pueden realizar más validaciones si es necesario
            session_start();
            $inicioDocente = $_SESSION['idDocente'];
            $model = new DocenteModel();
            $informacion = $model->informacionDocente2($inicioDocente);
            $idDocente = $informacion['id_maestro'];
            $nombreDocente = $informacion['nombre'];
            if ($model->insertarConfirmar($idUsuario, $nombreDocente, $fecha)) {
                // Redirigir a alguna página después de registrar al usuario
                echo '<script>alert("Se ha aceptado la cita");';
                echo 'window.location.href = "index.php?c=Docentes&a=index";</script>';
            } else {
                // Manejar el caso en que la inserción falla
                // Esto podría implicar mostrar un mensaje de error al usuario o redirigirlo a otra página
                // Por ejemplo:
                echo "Error al registrar el usuario.";
            }
        } else {
            // Redirigir si se intenta acceder directamente a través de GET
            header('Location: index.php');
        }
    }

    public function rechazarCita()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Validar y sanar los datos de entrada
            $idUsuario = $_POST['idUsuario'];
            $fecha = $_POST['fecha'];

            // Aquí se pueden realizar más validaciones si es necesario
            session_start();
            $inicioDocente = $_SESSION['idDocente'];
            $model = new DocenteModel();
            $informacion = $model->informacionDocente2($inicioDocente);
            $idDocente = $informacion['id_maestro'];
            $nombreDocente = $informacion['nombre'];
            if ($model->insertarRechazar($idUsuario, $nombreDocente, $fecha)) {
                // Redirigir a alguna página después de registrar al usuario
                echo '<script>alert("Se ha rechazado la cita");';
                echo 'window.location.href = "index.php?c=Docentes&a=index";</script>';
            } else {
                // Manejar el caso en que la inserción falla
                // Esto podría implicar mostrar un mensaje de error al usuario o redirigirlo a otra página
                // Por ejemplo:
                echo "Error al registrar el usuario.";
            }
        } else {
            // Redirigir si se intenta acceder directamente a través de GET
            header('Location: index.php');
        }
    }
    public function verMentoresporIdCursos()
    {
        if (isset($_GET['cursoId'])) {
            $cursoId = $_GET['cursoId'];
            $model = new DocenteModel();
            $mentores = $model->getMentoresByCursoId($cursoId);
            if ($mentores) {
                header('Content-Type: application/json');
                echo json_encode($mentores);
            } else {
                http_response_code(404);
                echo json_encode(['error' => 'No se encontraron mentores para este curso.']);
            }
        } else {
            http_response_code(400);
            echo json_encode(['error' => 'No se ha proporcionado un ID de curso.']);
        }
    }

    public function informacionMentorId()
    {
        error_log("informacionMentorId called");  // Logging

        if (isset($_GET['idCurso'])) {
            $cursoId = $_GET['idCurso'];
            $model = new DocenteModel();
            $mentores = $model->informacionMentorPorId($cursoId);

            if ($mentores) {
                if ($this->isAjaxRequest()) {
                    header('Content-Type: application/json');
                    echo json_encode($mentores);
                    exit;
                } else {
                    // Almacenar los datos en una variable accesible desde la vista
                    $this->mentores = $mentores;
                    // Evitar que la página se almacene en caché
                    header('Cache-Control: no-cache, must-revalidate');
                    header('Pragma: no-cache');
                    header('Expires: Sat, 26 Jul 1997 05:00:00 GMT');
                    // Cargar la vista HTML
                    require_once "Views/docente/perfilDocente.php";
                }
            } else {
                if ($this->isAjaxRequest()) {
                    http_response_code(404);
                    echo json_encode(['error' => 'No se encontraron cursos para este mentor.']);
                    exit;
                } else {
                    // Manejar la vista de error de HTML
                    require_once "Views/error/404.php";
                }
            }
        } else {
            if ($this->isAjaxRequest()) {
                http_response_code(400);
                echo json_encode(['error' => 'No se ha proporcionado un ID del Curso.']);
                exit;
            } else {
                // Manejar la vista de error de HTML
                require_once "Views/error/400.php";
            }
        }
    }
    
    public function informacionMentorAppId()
{
    // Verificar si se ha proporcionado el ID del curso
    if (!isset($_GET['idCurso'])) {
        // Responder con un error si no se proporciona el ID del curso
        http_response_code(400);
        echo json_encode(['error' => 'No se ha proporcionado un ID del Curso.']);
        exit;
    }

    $cursoId = $_GET['idCurso'];
    $model = new DocenteModel();
    $mentores = $model->informacionMentorPorId($cursoId);

    // Verificar si se encontraron mentores
    if (!$mentores) {
        // Responder con un error si no se encuentran mentores
        http_response_code(404);
        echo json_encode(['error' => 'No se encontraron cursos para este mentor.']);
        exit;
    }

    // Responder con los datos del mentor en formato JSON
    header('Content-Type: application/json');
    echo json_encode($mentores);
    exit;
}


    
    //CARGAR VISTA
    public function vistaMentorias()
    {
        session_start();
        require_once "Views/docente/mentoria/vistaMentoria.php";
    }
    
    //CARGAR VISTA
    public function vistaHistorialMuestras()
    {
        session_start();
        require_once "Views/docente/historialClaseMuestra/vistaClasesMuestras.php";
    }
    
    public function historialClaseMuestra()
    {
        if (isset($_GET['id'])) {
            $idMentor = $_GET['id'];
            $model = new DocenteModel();
            $getHistorial = $model->getHistorialClaseMuestra($idMentor);

            header('Content-Type: application/json');
            echo json_encode($getHistorial);
        } else {
            echo json_encode(["error" => "No se proporcionó el ID del maestro"]);
        }
    }
    
    public function mentorias()
    {
        if (isset($_GET['id'])) {
            $idMaestro = $_GET['id'];
            $model = new DocenteModel();
            $mentorInfo = $model->getCursosUsuariosPorMentor($idMaestro);

            header('Content-Type: application/json');
            echo json_encode($mentorInfo);
        } else {
            echo json_encode(["error" => "No se proporcionó el ID del maestro"]);
        }
    }
    
    public function actualizarCursados()
{
    
    // Asegurarse de que se está usando POST para la solicitud
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Capturar los datos del cuerpo de la solicitud JSON
        $data = json_decode(file_get_contents('php://input'), true);

        // Verificar si los datos vienen en formato JSON
        if ($data) {
            $idRuta = $data['idRuta'];
            $cursados = $data['cursados'] + 1; // Incrementar el valor de cursados

            $model = new DocenteModel();
            $resultado = $model->actualizarCursados($idRuta, $cursados);

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

public function actualizarCursadosDecrementar()
{
    
    // Asegurarse de que se está usando POST para la solicitud
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Capturar los datos del cuerpo de la solicitud JSON
        $data = json_decode(file_get_contents('php://input'), true);

        // Verificar si los datos vienen en formato JSON
        if ($data) {
            $idRuta = $data['idRuta'];
            $cursados = $data['cursados'] - 1; // Incrementar el valor de cursados

            $model = new DocenteModel();
            $resultado = $model->actualizarCursados($idRuta, $cursados);

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
    
    //fin



    private function isAjaxRequest()
    {
        error_log("Headers: " . json_encode(getallheaders()));
        return isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) === 'xmlhttprequest';
    }
}
