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
        require_once "Views/login/index.php";
    }

    public function miEspacio()
    {
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
                header('location:  index.php?c=usuarios&a=miEspacio');

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

    public function motorBusqueda()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Validar y sanar los datos de entrada
            $keyword = $_POST['keyword'];

            // Aquí se pueden realizar más validaciones si es necesario

            // Procesar los datos, por ejemplo, guardarlos en la base de datos
            $model = new UsuarioModel();
            $resultado = $model->motorBusqueda($keyword);
            // Crear un array para almacenar los resultados
            $resultados = array();
            // Obtener los resultados de la consulta y agregarlos al array
            while ($fila = $resultado->fetch_assoc()) {
                $resultados[] = $fila;
            }
            // Devolver los resultados como un objeto JSON
            echo json_encode($resultados);



        } else {
            // Redirigir si se intenta acceder directamente a través de GET
            //MENSAJE DE ERROR
        }
    }


    public function prueba()
    {
        session_start();
        session_destroy();
        header('location: index.php');
    }
}
