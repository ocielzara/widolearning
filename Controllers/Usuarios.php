<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';

class UsuariosController
{
    //Incuimos los modelos que vamos a utilizar
    public function __construct()
    {
        require_once "Models/UsuariosModel.php";
    }


    public function index()
    {
        session_start();
        $model = new UsuarioModel();
        //Estilo del boton "clase muestra"
        $mostrar = false;
        if (isset($_SESSION['idUsuario'])) {
            //Estilo del boton "clase muestra"
            $mostrar = true;
            $idUsuario = $_SESSION['idUsuario'];
            //Nuevo inicio
            $informacion = $model->informacionUsario($idUsuario);
            $nombreUsuario = $informacion['nombre'];
            //Nuevo end
            $notificaciones = $model->consultaNotificaciones($idUsuario);
            if ($notificaciones) {
                // Inicializar un array para almacenar las fotos de los cursos
                $consultaNotificacion = array();
                // Verificar si hay disponibilidad antes de intentar iterar sobre ella
                if (is_array($notificaciones) && count($notificaciones) > 0) {

                    foreach ($notificaciones as $totalNotificaciones) {
                        // Agregar los datos como un array asociativo a $consulta
                        $consultaNotificacion[] = array(
                            'id_maestro' => $totalNotificaciones['id_maestro'],
                            'mensaje' => $totalNotificaciones['mensaje'],
                            'estado' => $totalNotificaciones['estado'],
                            'fecha_creacion' => $totalNotificaciones['fecha_creacion']
                        );
                    }
                } else {
                    // Si no hay disponibilidad, inicializar los arrays como vacíos
                    $consultaNotificacion = [];
                }
            } else {
            }
        }

        $docentes = $model->consultaDocentesInformacion();
        // Inicializar un array para almacenar las fotos de los cursos
        $consultaDocentes = array();
        // Verificar si hay disponibilidad antes de intentar iterar sobre ella
        if (is_array($docentes) && count($docentes) > 0) {

            foreach ($docentes as $totalDocentes) {
                // Agregar los datos como un array asociativo a $consulta
                $consultaDocentes[] = array(
                    'nombre' => $totalDocentes['nombre'],
                    'foto' => $totalDocentes['foto']
                );
            }
        } else {
            // Si no hay disponibilidad, inicializar los arrays como vacíos
            $consultaDocentes = [];
        }

        $asesorias = $model->consultaAsesoriasInformacion();
        // Inicializar un array para almacenar las fotos de los cursos
        $consultaAsesorias = array();
        // Verificar si hay disponibilidad antes de intentar iterar sobre ella
        if (is_array($asesorias) && count($asesorias) > 0) {

            foreach ($asesorias as $totalAsesorias) {
                // Agregar los datos como un array asociativo a $consulta
                $consultaAsesorias[] = array(
                    'nombre' => $totalAsesorias['nombre'],
                    'foto' => $totalAsesorias['foto']
                );
            }
        } else {
            // Si no hay disponibilidad, inicializar los arrays como vacíos
            $consultaAsesorias = [];
        }
        require_once "Views/main/index.php";
    }

    public function login()
    {
        require_once "Views/login/index.php";
    }
    
    public function revisaCorreo()
    {
        require_once "Views/login/vistaRevisaCorreo.php";
    }

    public function vistaRegistro()
    {
        require_once "Views/alumno/registro.php";
    }


    public function recuperarContraseña()
    {
        require_once "Views/login/recuperacionContra.php";
    }

    public function miEspacio()
    {
        // Verificar si se ha pasado el parámetro 'n' en la URL
        if (isset($_GET['n'])) {
            // Obtener el valor de 'n' de la URL y asignarlo a una variable
            $nombre = $_GET['n'];
        } else {
            echo "No se ha proporcionado un nombre.";
            return; // Terminar la ejecución de la función si no se proporciona un nombre
        }

        $usuario = new UsuarioModel();
        $resultado = $usuario->datosUsuarios($nombre);

        // Contadores para inscripciones cursando y completadas
        $countCursando = 0;
        $countCompletado = 0;

        // Procesar el resultado de la consulta
        if ($resultado) {
            // Contar inscripciones cursando y completadas
            while ($fila = mysqli_fetch_assoc($resultado)) {
                if ($fila['estado'] == 'cursando') {
                    $countCursando++;
                } else {
                    $countCompletado++;
                }
            }
        } else {
            echo "No se encontraron inscripciones para el usuario con el nombre proporcionado.";
        }

        // Incluir la vista y pasar los datos
        require_once "Views/alumno/index.php";
    }

    public function muestra()
    {
        require_once "Views/alumno/indexMuestra.php";
    }

    public function iniciarSesion()
{
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $input = file_get_contents("php://input");
        $data = json_decode($input, true);

        $correo = isset($data['correo']) ? $data['correo'] : null;
        $contrasena = isset($data['contraseña']) ? $data['contraseña'] : null;

        if (empty($correo) || empty($contrasena)) {
            $response = array(
                'success' => false,
                'message' => 'Email and password are required.',
            );
            echo json_encode($response);
            exit;
        }

        $model = new UsuarioModel();
        $usuario = $model->validarUsuario($correo, $contrasena);
        if ($usuario && is_array($usuario)) {
            session_start();
            $idUsuario = $usuario['id_usuario'];
            $nombre = $usuario['nombre'];
            $correo_electronico = $usuario['correo_electronico'];
            $tipo = $usuario['tipo'];

            $_SESSION['id_usuario'] = $idUsuario;
            $_SESSION['nombre'] = $nombre;
            $_SESSION['correo_electronico'] = $correo_electronico;
            $_SESSION['tipo'] = $tipo;

            $response = array(
                'success' => true,
                'message' => 'Login successful',
                'idUsuario' => $idUsuario,
                'nombre' => $nombre,
                'correo' => $correo_electronico,
                'tipo' => $tipo,
            );
            echo json_encode($response);
            exit;
        } else {
            $response = array(
                'success' => false,
                'message' => 'Inicio de sesión fallido. Por favor, verifica tu correo electrónico o contraseña.',
            );
            echo json_encode($response);
            exit;
        }
    } else {
        header('Location: index.php');
        exit;
    }
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



    public function registro()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $json_data = file_get_contents('php://input');
            $data = json_decode($json_data, true);

            $nombre = strtolower($data['nombre']);
            $edad = $data['edad'];
            $telefono = $data['telefono'];
            $correo = filter_var($data['correo'], FILTER_SANITIZE_EMAIL);
            $contraseña = $data['contraseña'];
            $interesesSeleccionados = $data['intereses'];
            $interesesComoTexto = implode(" ", $interesesSeleccionados);

            $model = new UsuarioModel();
            $mensaje = $model->insertarUsuario($nombre, $correo, $edad, $telefono, $interesesComoTexto, $contraseña);
            header('Content-Type: application/json');
            if ($mensaje === "¡Tu cuenta ha sido creada exitosamente!") {
                // El usuario se registró correctamente
                $id_usuario = $model->validarUsuario($correo, $contraseña);
                session_start();

                $this->enviarCorreoBienvenida($correo, $nombre);
                $response = array(
                    'success' => true,
                    'message' => 'Registro exitoso',
                    'id_usuario' => $id_usuario
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

    public function enviarCorreoBienvenida($correo, $nombre)
    {
        $mail = new PHPMailer(true);
        try {
            $mail->SMTPDebug = 0;
            $mail->isSMTP();
            $mail->Host = 'smtp.hostinger.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'hola@widolearn.com';
            $mail->Password = 'Wido2024!';
            $mail->SMTPSecure = 'ssl';
            $mail->Port = 465;

            $mail->setFrom('hola@widolearn.com', 'Wido');
            $mail->addAddress($correo);

            $htmlContent = file_get_contents('Views/contenido/correo.html');

            $mail->isHTML(true);
            $mail->Subject = 'Wido bienvenida ' . $nombre;
            $mail->Body = $htmlContent;
            $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
            
            //Activamos caracteres de latinos
            $mail->CharSet = 'UTF-8';

            $mail->send();
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    }

    // Método para obtener información de la base de datos
    public function obtenerInformacionDesdeBD()
    {
        $titulo = $_POST['titulo'];
        // Lógica para obtener la información de la base de datos utilizando el modelo
        $model = new UsuarioModel();
        $informacion = $model->informacionCursos($titulo);

        // Devolver la información como JSON
        header('Content-Type: application/json');
        echo json_encode($informacion);
    }

    //**********************Nuevos*/
    public function claseMuestraNavegacion()
    {
        if (!isset($_GET['nombreCurso']) || !isset($_GET['idCurso'])) {
            require_once "Views/error/error.php";
            exit;
        }

        $nombre = $_GET['nombreCurso'];
        $idCurso = $_GET['idCurso'];

        // Agregar mensajes de depuración
        error_log("nombreCurso: $nombre");
        error_log("idCurso: $idCurso");

        $model = new UsuarioModel();
        $informacion = $model->informacionBusqueda($nombre);

        if ($informacion) {
            $nombreCurso = $informacion['nombre'];
            $tipo = $informacion['tipo'];
            require_once "Views/alumno/detallesCurso.php";
        } else {
            // IMPLEMENTAR PANTALLA DE ERROR
            require_once "Views/docente/index.php";
        }
    }

    public function claseMuestraNavegacionAsesoria()
    {
        $nombre = $_POST['nombre'];
        $model = new UsuarioModel();
        $informacion = $model->informacionBusquedaAsesoria($nombre);
        echo ("segunda funcion donde se ven los datos");
        if ($informacion) {
            $nombreCurso = $informacion['nombre'];

            require_once "Views/alumno/busqueda.php";
        } else {
            //IMPLEMENTAR PANTALLA DE ERROR
            require_once "Views/docente/index.php";
        }
    }

    public function matchMaestro()
    {

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Validar y sanar los datos de entrada
            $nombreCurso = $_POST['nombreCurso'];
            $fecha = $_POST['fecha'];
            $hora = $_POST['hora'];
            $objetivo = $_POST['objetivo'];
            session_start();
            $_SESSION['objetivoUsario'] = $objetivo;
            $_SESSION['nombreCurso'] = $nombreCurso;
            //echo $fecha, " ", $hora;
            $model = new UsuarioModel();
            $informacion2 = $model->match($fecha, $nombreCurso);
            // Verificar si se encontraron cursos asignados
            if ($informacion2) {
                // Inicializar un array para almacenar las fotos de los cursos
                $fotos = array();

                // Iterar sobre los resultados de los cursos asignados
                foreach ($informacion2 as $curso) {
                    // Agregar la foto del curso al array de fotos de cursos
                    $fotos[] = $curso['foto'];
                }
            } else {
                // Si no se encontraron cursos asignados, inicializar el array como vacío
                $fotos = array();
            }

            require_once "Views/alumno/matchMaestro.php";
        } else {
            // Redirigir si se intenta acceder directamente a través de GET
            header('Location: index.php');
        }
    }

    public function enviarCorreoRecuperacion($correo, $contrasena)
    {
        // Generar una nueva contraseña aleatoria
        try {
            $nuevaContrasena = $contrasena;

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
            $mail->addAddress($correo);

            $htmlContent = file_get_contents('Views/contenido/correo.html');

            $mail->isHTML(true);
            $mail->Subject = 'Recuperación de contraseña';
            $mail->Body = "Tu nueva contraseña es: $nuevaContrasena, o si tu quieres crearla y actualizarla ingresa a: https://www.widolearn.com/index.php?c=Usuarios&a=vistaRecuperacionContrasena";
            $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

            $mail->send();

            if ($mail->ErrorInfo) {
                echo "Error al enviar el correo de recuperación: {$mail->ErrorInfo}";
            } else {
                //echo "Correo de recuperación enviado correctamente";
            }
        } catch (Exception $e) {
            echo "Error al enviar el correo de recuperación: {$e->getMessage()}";
        }
    }

    public function agendarCita()
    {
        error_log('Método agendarCita llamado'); // Registro para depuración

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            error_log('Método de solicitud: POST'); // Registro para depuración

            $input = file_get_contents("php://input");
            $data = json_decode($input, true);

            error_log('Datos recibidos: ' . print_r($data, true)); // Registro para depuración

            $mentorID = isset($data['mentorID']) ? $data['mentorID'] : null;
            $hora = isset($data['hora']) ? $data['hora'] : null;
            $dia = isset($data['dia']) ? $data['dia'] : null;
            $mentorName = isset($data['mentorName']) ? $data['mentorName'] : null;
            $cursoName = isset($data['cursoName']) ? $data['cursoName'] : null;
            $alumnoName = isset($data['alumnoName']) ? $data['alumnoName'] : null;
            $correoUsuario = isset($data['correoUsuario']) ? $data['correoUsuario'] : null;
            $edad = isset($data['edad']) ? $data['edad'] : null;
            $conocimientos = isset($data['conocimientos']) ? $data['conocimientos'] : null;

            if (empty($mentorID) || empty($hora) || empty($dia) || empty($mentorName) || empty($cursoName) || empty($alumnoName) || empty($correoUsuario)) {
                $response = array(
                    'success' => false,
                    'message' => 'Faltan datos necesarios para agendar la cita.',
                );
                echo json_encode($response);
                exit;
            }
            
            //CAMBIOS JULIO 24
            //Obtener ID de curso 
            $model = new UsuarioModel();
            $idCurso = $model->informacionIDcurso($cursoName);
            //Obtener ID asignacion
            $idAsignacion = $model->informacionIDasignacion($mentorID, $idCurso);
            //Obtener ID usuario
            $idUsario = $model->informacionIDusuario($correoUsuario);
            // Verifica si ya existe una inscripción con esos datos
            $existeInscripcion = $model->verificarInscripcion($idUsario, $idAsignacion);
            if (!$existeInscripcion) {
                // Solo inserta si no existe un registro
                //Inserto en la tabla inscripcion 
                $resultado = $model->insertaInscripcion($idUsario, $idAsignacion);
            } else {
                // El registro ya existe, puedes manejar esto como desees
                
            }
            $correoMentor = $model->informacionCorreoMentor($mentorID);
            //FIN

            $this->enviarAgendaMentor($correoUsuario, $mentorName, $hora, $dia, $cursoName, $alumnoName, $correoMentor, $edad, $conocimientos);
            exit;
        } else {
            error_log('Método de solicitud no permitido: ' . $_SERVER["REQUEST_METHOD"]); // Registro para depuración

            $response = array(
                'success' => false,
                'message' => 'Método de solicitud no permitido.',
            );
            echo json_encode($response);
            exit;
        }
    }

    public function enviarAgendaMentor($correo, $mentorName, $hora, $dia, $cursoName, $alumnoName, $correoMentor, $edad, $conocimientos)
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
            $mail->addAddress($correo);
            $mail->addAddress($correoDefecto);
            
            // Dirección de correo del mentor
            $mail->addAddress($correoMentor);
            
            $htmlContent = file_get_contents('Views/contenido/compra-curso.php');

            $htmlContent = str_replace('{{MENTOR_NAME}}', htmlspecialchars($mentorName), $htmlContent);
            $htmlContent = str_replace('{{HORA}}', htmlspecialchars($hora), $htmlContent);
            $htmlContent = str_replace('{{DIA}}', htmlspecialchars($dia), $htmlContent);
            $htmlContent = str_replace('{{CURSO_NAME}}', htmlspecialchars($cursoName), $htmlContent);
            $htmlContent = str_replace('{{ALUMNO_NAME}}', htmlspecialchars($alumnoName), $htmlContent);
            $htmlContent = str_replace('{{ALUMNO_EDAD}}', htmlspecialchars($edad), $htmlContent);
            $htmlContent = str_replace('{{ALUMNO_CONOCIMIENTOS}}', htmlspecialchars($conocimientos), $htmlContent);

            $mail->isHTML(true);
            $mail->Subject = 'Curso Agendado';
            $mail->Body = $htmlContent;
            
            //Activamos caracteres de latinos
            $mail->CharSet = 'UTF-8';

            $mail->send();

            if ($mail->ErrorInfo) {
                $response = array(
                    'success' => false,
                    'message' => "Error al enviar el correo de recuperación: {$mail->ErrorInfo}"
                );
            } else {
                $response = array(
                    'success' => true,
                    'message' => "Curso agendado y enviado correctamente"
                );
            }
            echo json_encode($response);
        } catch (Exception $e) {
            echo "Error al enviar el correo de recuperación: {$e->getMessage()}";
        }
    }

    public function recuperarContrasena()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $correo = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
            // Validar que el correo existe en la base de datos
            $usuarioModel = new UsuarioModel();
            $usuario = $usuarioModel->obtenerUsuarioPorCorreo($correo);
            if ($usuario) {
                // Generar una nueva contraseña aleatoria
                $nuevaContrasena = $usuarioModel->generarContraseñaAleatoria();
                
                // Mostrar la nueva contraseña en la consola para depuración (Solo para desarrollo)
                echo "<script>console.log('Nueva contraseña para $correo: $nuevaContrasena');</script>";
                

                // Actualizar la contraseña en la base de datos
                if ($usuarioModel->actualizarContrasena($usuario['id_usuario'], $nuevaContrasena)) {
                    // Enviar correo electrónico con la nueva contraseña
                    $this->enviarCorreoRecuperacion($correo, $nuevaContrasena);
                    // Mensaje de alerta y redirección en dos etapas
                    echo "<script>
                    setTimeout(function() {
                        window.location.href = 'https://www.widolearn.com/index.php?c=Usuarios&a=revisaCorreo';
                        setTimeout(function() {
                            window.location.href = 'https://www.widolearn.com/index.php?c=Usuarios&a=login';
                        }, 3000);
                    }, 0);
                    </script>";
                } else {
                    echo "Error al actualizar la contraseña.";
                }
            } else {
                echo "El correo electrónico proporcionado no está asociado a ninguna cuenta.";
            }
        } else {
            // Redirigir si se intenta acceder directamente a través de GET
            header('Location: index.php');
        }
    }

    public function prueba()
    {
        session_start();
        session_destroy();
        header('location: index.php');
    }

    public function agendar()
    {
    }
    
    //***********NUEVOS
    
    public function vistaRecuperacionContrasena()
    {
        require_once "Views/login/actualizacionContrasena.php";
    }
    
    public function actualizarContrasena()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $correo = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
            $contrasena = $_POST['newPassword'];

            // Validar que el correo existe en la base de datos
            $usuarioModel = new UsuarioModel();
            $usuario = $usuarioModel->obtenerUsuarioPorCorreo($correo);
                // Actualizar la contraseña en la base de datos
                if ($usuarioModel->actualizarContrasena($usuario['id_usuario'], $contrasena)) {
                    header('Location: index.php?c=Usuarios&a=login');
                } else {
                    echo "Error al actualizar la contraseña.";
                }
        } else {
            // Redirigir si se intenta acceder directamente a través de GET
            header('Location: index.php');
        }
    }
    
    public function verMentores()
 {
    $usuarioModel = new UsuarioModel();
    $mentoresCursos = $usuarioModel->getAllMentoresYCursos();
    
    header('Content-Type: application/json');
    
    echo json_encode($mentoresCursos);
 }
 
 public function verMentoresPorTipo()
{
    if (isset($_GET['tipoCurso'])) {
        $tipoCurso = $_GET['tipoCurso'];
        $usuarioModel = new UsuarioModel();
        $resultado = $usuarioModel->getMentoresPorTipoCurso($tipoCurso);

        header('Content-Type: application/json');
        echo json_encode($resultado);
    } else {
        echo json_encode(["error" => "No se proporcionó el tipo de curso"]);
    }
}

//CAMBIOS JULIO 24

public function vistaAprendizajeDiseno()
{
    if (isset($_GET['idUsuario'])) {
        $idUsuario = $_GET['idUsuario'];
        
    } else {
        echo json_encode(["error" => "No se proporcionó el ID de usuario"]);
    }
    
    require_once "Views/alumno/rutaAprendizaje.php";
}
 
 public function vistaAprendizaje()
{
    if (isset($_GET['idUsuario'])) {
        $idUsuario = $_GET['idUsuario'];
        $usuarioModel = new UsuarioModel();
        $resultado = $usuarioModel->getCursosPorUsuario($idUsuario);

        header('Content-Type: application/json');
        echo json_encode($resultado);
    } else {
        echo json_encode(["error" => "No se proporcionó el ID de usuario"]);
    }
    
    // require_once "Views/alumno/rutaAprendizaje.php";
}

public function vistaCreditos()
{
    if (isset($_GET['idUsuario'])) {
        $idUsuario = $_GET['idUsuario'];
        
    } else {
        echo json_encode(["error" => "No se proporcionó el ID de usuario"]);
    }
    
    require_once "Views/alumno/creditos.php";
}

public function creditosCursos()
{
    if (isset($_GET['idUsuario']) && isset($_GET['idCurso'])) {
        $idUsuario = $_GET['idUsuario'];
        $idCurso = $_GET['idCurso'];
        $idMentor = $_GET['idMentor'];
        $usuarioModel = new UsuarioModel();
        $resultado = $usuarioModel->getCreditosCursos($idUsuario, $idCurso, $idMentor);

        header('Content-Type: application/json');
        echo json_encode($resultado);
    } else {
        echo json_encode(["error" => "No se proporcionó el ID de usuario"]);
    }
    
}

public function getEstado() 
{
     if (isset($_GET['idUsuario']) && isset($_GET['idCurso'])) {
        $idUsuario = $_GET['idUsuario'];
        $idCurso = $_GET['idCurso'];
        $usuarioModel = new UsuarioModel();
        $resultado = $usuarioModel->verEstadoInscripcion($idUsuario, $idCurso);

        header('Content-Type: application/json');
        echo json_encode(['estado' => $resultado]);
    } else {
        echo json_encode(["error" => "No se proporcionó el ID de usuario"]);
    }
}



}
