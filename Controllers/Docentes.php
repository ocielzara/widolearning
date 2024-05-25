<?php

use function PHPSTORM_META\map;

class DocentesController
{
    //Incuimos los modelos que vamos a utilizar
    public function __construct()
    {
        require_once "Models/DocentesModel.php";
    }


    public function index()
    {
        session_start();
        if (isset($_SESSION['idDocente'])) {
            $docente = new DocenteModel();
            $idDocente = $_SESSION['idDocente'];
            $disponibilidadInformacion = $docente->disponibilidadConsulta($idDocente);
            // Verificar si se encontraron cursos asignados
            if ($disponibilidadInformacion) {
                // Inicializar un array para almacenar las fotos de los cursos
                $consulta = array();
                // Verificar si hay disponibilidad antes de intentar iterar sobre ella
                if (is_array($disponibilidadInformacion) && count($disponibilidadInformacion) > 0) {

                    foreach ($disponibilidadInformacion as $disponibilidad) {
                        // Agregar los datos como un array asociativo a $consulta
                        $consulta[] = array(
                            'id_disponibilidad' => $disponibilidad['id_disponibilidad'],
                            'fecha' => $disponibilidad['fecha'],
                            'hora' => $disponibilidad['hora']
                        );
                    }
                } else {
                    // Si no hay disponibilidad, inicializar los arrays como vacíos
                    $consulta = [];
                }
            } else {
            }

            $notificaciones = $docente->consultaNotificaciones($idDocente);
            if ($notificaciones) {
                // Inicializar un array para almacenar las fotos de los cursos
                $consultaNotificacion = array();
                // Verificar si hay disponibilidad antes de intentar iterar sobre ella
                if (is_array($notificaciones) && count($notificaciones) > 0) {

                    foreach ($notificaciones as $totalNotificaciones) {
                        // Agregar los datos como un array asociativo a $consulta
                        $consultaNotificacion[] = array(
                            'id_usuario' => $totalNotificaciones['id_usuario'],
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

        require_once "Views/docente/index.php";
    }

    public function login()
    {
        require_once "Views/login/indexDocente.php";
    }

    public function iniciarSesion()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $correo = $_POST['correo'];
            $contraseña = $_POST['contraseña'];

            $docente = new DocenteModel();
            $maestro = $docente->validarDocente($correo, $contraseña);
            if ($maestro) {
                $idDocente = $maestro['id_maestro'];
                session_start();
                $_SESSION['idDocente'] = $idDocente;
                // Redirigir a la página de miEspacio
                header("location:  index.php?c=Docentes&a=index&n=$idDocente");
            } else {
                require_once "Views/error/index.php";
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
            // Validar y sanar los datos de entrada
            $date = $_POST['date'];
            $time = $_POST['time'];
            $id = $_POST['id_maestro'];

            // Aquí se pueden realizar más validaciones si es necesario

            // Procesar los datos, por ejemplo, guardarlos en la base de datos
            $model = new DocenteModel();
            if ($model->insertarDisponibilidad($id, $date, $time)) {
                // Redirigir a alguna página después de registrar al usuario
                header("location:  index.php?c=Docentes&a=index");
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

    public function agendaEditar()
    {
        $id_disponibilidad = $_GET['id'];

        // Procesar los datos, por ejemplo, guardarlos en la base de datos
        $model = new DocenteModel();
        $informacion = $model->consultaDisponibilidadAgenda($id_disponibilidad);
        if ($informacion) {
            // Redirigir a alguna página después de registrar al usuario
            $fecha = $informacion['fecha'];
            $hora = $informacion['hora'];
            require_once "Views/docente/agenda/editar.php";
        } else {
            // Manejar el caso en que la inserción falla
            // Esto podría implicar mostrar un mensaje de error al usuario o redirigirlo a otra página
            // Por ejemplo:
            echo "Error al registrar el usuario.";
        }
    }

    public function actualizarDisponibilidad()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Validar y sanar los datos de entrada
            $date = $_POST['nuevaFecha'];
            $time = $_POST['nuevaHora'];
            $id = $_POST['id'];

            // Aquí se pueden realizar más validaciones si es necesario

            // Procesar los datos, por ejemplo, guardarlos en la base de datos
            $model = new DocenteModel();
            if ($model->actualizarDisponibilidad($id, $date, $time)) {
                // Redirigir a alguna página después de registrar al usuario
                header("location:  index.php?c=Docentes&a=index");
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
                    $this->$mentores = $mentores;
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


    private function isAjaxRequest()
    {
        return isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) === 'xmlhttprequest';
    }
}
