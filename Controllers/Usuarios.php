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
                $idUsuario = $usuario['id_usuario'];
                session_start();
                $_SESSION['idUsuario'] = $idUsuario;
                $response = array(
                    'success' => true,
                    'message' => 'Login successful',
                    'idUsuario' => $idUsuario,
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
        $nombre = $_POST['nombreCurso'];

        $model = new UsuarioModel();
        $informacion = $model->informacionBusqueda($nombre);

        if ($informacion) {
            $nombreCurso = $informacion['nombre'];
            $tipo = $informacion['tipo'];
            require_once "Views/alumno/busqueda.php";
        } else {
            //IMPLEMENTAR PANTALLA DE ERROR
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

    public function apartarCita()
    {

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Validar y sanar los datos de entrada
            $fecha = $_POST['fecha_seleccionada'];
            $hora = $_POST['hora_seleccionada'];
            $idDocente = $_POST['idDocente'];
            //echo $fecha, " ", $idUsuario;
            session_start();
            // Verificar si la variable de sesión existe antes de usarla para evitar errores
            if (isset($_SESSION['idUsuario'])) {
                $objetivo = $_SESSION['objetivoUsario'];
                $nombreCurso = $_SESSION['nombreCurso'];
                if (isset($objetivo) && isset($nombreCurso) && !empty($objetivo) && !empty($nombreCurso)) {
                    $inicializador = "";
                    $inicioUsuario = $_SESSION['idUsuario'];
                    $model = new UsuarioModel();
                    $informacion = $model->informacionUsario($inicioUsuario);
                    $idUsuarioInicio = $informacion['id_usuario'];
                    $nombreUsuario = $informacion['nombre'];
                    $edadUsuario = $informacion['edad'];
                    if ($model->agendaCitaDocenteBuscado($idDocente, $fecha, $hora, $inicioUsuario, $nombreUsuario, $edadUsuario, $nombreCurso, $objetivo)) {
                        // Redirigir a alguna página después de registrar al usuario
                        $_SESSION['objetivoUsario'] = $inicializador;
                        $_SESSION['nombreCurso'] = $inicializador;
                        echo '<script>alert("Se ha agendado la cita, espera a que el docente confirme la cita.");';
                        echo 'window.location.href = "index.php?c=Usuarios&a=index";</script>';
                    } else {
                        // Manejar el caso en que la inserción falla
                        // Esto podría implicar mostrar un mensaje de error al usuario o redirigirlo a otra página
                        // Por ejemplo:
                        echo "Error al registrar el usuario.";
                    }
                } else {
                    $inicioUsuario = $_SESSION['idUsuario'];
                    $model = new UsuarioModel();
                    $informacion = $model->informacionUsario($inicioUsuario);
                    $idUsuarioInicio = $informacion['id_usuario'];
                    $nombreUsuario = $informacion['nombre'];
                    $edadUsuario = $informacion['edad'];
                    $interesUsuario = $informacion['interes'];
                    if ($model->agendaCitaDocente($idDocente, $fecha, $hora, $inicioUsuario, $nombreUsuario, $edadUsuario, $interesUsuario)) {
                        echo '<script>alert("Se ha agendado la cita, espera a que el docente confirme la cita.");';
                        echo 'window.location.href = "index.php?c=Usuarios&a=index";</script>';
                    } else {
                        // Manejar el caso en que la inserción falla
                        // Esto podría implicar mostrar un mensaje de error al usuario o redirigirlo a otra página
                        // Por ejemplo:
                        echo "Error al registrar el usuario.";
                    }
                }
            } else {
                //echo "Para agendar cita, debes iniciar sesion";
                echo '<script>alert("Para agendar cita, debes iniciar sesion");';
                echo 'window.location.href = "index.php?c=Usuarios&a=login";</script>';
            }
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
            $mail->Body = "Tu nueva contraseña es: $nuevaContrasena";
            $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

            $mail->send();

            if ($mail->ErrorInfo) {
                echo "Error al enviar el correo de recuperación: {$mail->ErrorInfo}";
            } else {
                echo "Correo de recuperación enviado correctamente";
            }
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

                // Actualizar la contraseña en la base de datos
                if ($usuarioModel->actualizarContrasena($usuario['id_usuario'], $nuevaContrasena)) {
                    // Enviar correo electrónico con la nueva contraseña
                    $this->enviarCorreoRecuperacion($correo, $nuevaContrasena);
                    echo "Se ha enviado un correo electrónico con instrucciones para recuperar tu contraseña.";
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
}
