<?php
class UsuariosController
{
    //Incuimos los modelos que vamos a utilizar
    public function __construct()
    {
        require_once "Models/UsuariosModel.php";
    }


    public function index()
    {
        require_once "Views/main/index.php";
    }

    public function login()
    {
        require_once "Views/login/index.php";
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
                $nombre = $usuario['nombre'];
                session_start();
                $_SESSION['nombreAlumno'] = $nombre;

                // Redirigir a la página de miEspacio
                header("location:  index.php?c=usuarios&a=miEspacio&n=$nombre");
            } else {
                // Inicio de sesión fallido, redirigir al login _
                header('location: index.php');
            }
        } else {
            // Redirigir si se intenta acceder directamente a través de GET
            header('Location: index.php');
        }
    }

    public function registro()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Validar y sanar los datos de entrada
            $nombre = $_POST['nombre'];
            $correo = filter_var($_POST['correo'], FILTER_SANITIZE_EMAIL);
            $celular = $_POST['celular']; // No necesitas filtrar la contraseña aquí

            // Aquí se pueden realizar más validaciones si es necesario

            // Procesar los datos, por ejemplo, guardarlos en la base de datos
            $model = new UsuarioModel();
            if ($model->insertarUsuario($nombre, $correo, $celular)) {
                // Redirigir a alguna página después de registrar al usuario
                header('Location: index.php');
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
    public function obtenerInformacionDesdeBD() {
        $titulo = $_POST['titulo'];
        // Lógica para obtener la información de la base de datos utilizando el modelo
        $model = new UsuarioModel();
        $informacion = $model->informacionCursos($titulo);

        // Devolver la información como JSON
        header('Content-Type: application/json');
        echo json_encode($informacion);
    }


    public function prueba()
    {
        session_start();
        session_destroy();
        header('location: index.php');
    }
}
