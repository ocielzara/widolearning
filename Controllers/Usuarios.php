<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

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
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $correo = $_POST['correo'];
            $contrasena = $_POST['contraseña'];
            $model = new UsuarioModel();
            $usuario = $model->validarUsuario($correo, $contrasena);

            if ($usuario) {
                // Inicio de sesión exitoso
                $idUsuario = $usuario['id_usuario'];
                session_start();
                $_SESSION['idUsuario'] = $idUsuario;

                // Redirigir a la página de miEspacio
                header("location:  index.php?c=Usuarios&a=index&n=$idUsuario");
            } else {
                echo '<script>alert("Inicio de sesión fallido. Por favor, verifica tu correo electrónico o contraseña.");';
                echo 'window.location.href = "index.php";</script>';
            }
        } else {
            // Redirigir si se intenta acceder directamente a través de GET
            header('Location: index.php');
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
            // Validar y sanar los datos de entrada
            $nombre = strtolower($_POST['nombre']);
            $edad = $_POST['edad'];
            $telefono = $_POST['telefono'];
            $correo = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
            $celular = $_POST['contraseña']; // No necesitas filtrar la contraseña aquí
            $interesesSeleccionados = $_POST['intereses'];
            // Convertir el array de intereses en una cadena separada por comas
            $interesesComoTexto = implode(" ", $interesesSeleccionados);


            // Aquí se pueden realizar más validaciones si es necesario

            // Procesar los datos, por ejemplo, guardarlos en la base de datos
            $model = new UsuarioModel();
            if ($model->insertarUsuario($nombre, $correo, $edad, $telefono, $interesesComoTexto, $celular)) {
                // Iniciar sesion automaticamente
                $usuario = $model->validarUsuario($correo, $celular);
                if ($usuario) {
                    // Inicio de sesión exitoso
                    $idUsuario = $usuario['id_usuario'];
                    session_start();
                    $_SESSION['idUsuario'] = $idUsuario;

                    //********************************************************* */


                    //Rutas
                    require 'PHPMailer/Exception.php';
                    require 'PHPMailer/PHPMailer.php';
                    require 'PHPMailer/SMTP.php';



                    //Create an instance; passing `true` enables exceptions
                    $mail = new PHPMailer(true);

                    try {
                        //Server settings
                        $mail->SMTPDebug = 0;                      //Enable verbose debug output
                        $mail->isSMTP();                                            //Send using SMTP
                        $mail->Host = 'smtp.hostinger.com';                     //Set the SMTP server to send through
                        $mail->SMTPAuth = true;                                   //Enable SMTP authentication
                        $mail->Username = 'hola@widolearn.com';                     //SMTP username
                        $mail->Password = 'Wido2024!';                               //SMTP password
                        $mail->SMTPSecure = 'ssl';            //Enable implicit TLS encryption
                        $mail->Port = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

                        //Recipients
                        $mail->setFrom('hola@widolearn.com', 'Wido');    //Add a recipient
                        //$mail->addAddress($email, $name);               //Name is optional
                        $mail->addAddress($correo);

                        // Lee el contenido del archivo HTML
                        $htmlContent = file_get_contents('Views/contenido/correo.html');

                        //Content
                        $mail->isHTML(true);                                  //Set email format to HTML
                        $mail->Subject = 'Wido bienvenida ' . $nombre;
                        $mail->Body = $htmlContent;
                        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

                        $mail->send();
                        echo 'Message has been sent';
                    } catch (Exception $e) {
                        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
                    }

                    // Redirigir a la página de miEspacio
                    header("location:  index.php?c=Usuarios&a=index&n=$idUsuario");
                } else {
                    echo '<script>alert("Inicio de sesión automatico fallido");';
                    echo 'window.location.href = "index.php";</script>';
                }
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
            $fotoCurso = $informacion['foto'];
            $descripcionCurso = $informacion['descripcion'];
            $precioCurso = $informacion['precio'];
            $pdfCurso = $informacion['pdf'];

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
        if ($informacion) {
            $nombreCurso = $informacion['nombre'];
            $fotoCurso = $informacion['foto'];
            $descripcionCurso = $informacion['descripcion'];
            $precioCurso = $informacion['precio'];
            $pdfCurso = $informacion['pdf'];

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


    public function prueba()
    {
        session_start();
        session_destroy();
        header('location: index.php');
    }
}
