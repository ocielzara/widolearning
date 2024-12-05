<?php
require_once "Models/CursosModel.php"; // Asegúrate de que la ruta sea correcta
require_once "Models/DocentesModel.php";
class AsesoriaController
{


    public function ver()
    {
        session_start(); // Inicializa la sesión
    
        // Verifica si el usuario ha iniciado sesión
        if (!isset($_SESSION['id_usuario'])) {
            header('Location: index.php?c=Usuarios&a=login');
            exit;
        }
    
        // Verifica si se pasa el parámetro 'n' en la URL
        $id_usuario = $_SESSION['id_usuario']; // Por defecto toma el de la sesión
        if (isset($_GET['n']) && $_GET['n'] == $id_usuario) {
            // Si el parámetro 'n' coincide con el id de la sesión, continúa
            $asesoriaModel = new CursoModel();
            $asesorias = $asesoriaModel->getAsesorias(); // Método que devuelve todas las asesorías
            $activeLink = 'asesoria';
            require_once "Views/Asesorias/verAsesoria.php"; // Carga la vista
        } else {
            // Redirige a error si el 'n' no coincide o no está presente
            header('Location: index.php?c=Usuarios&a=error');
            exit;
        }
    }
    

    public function cursosSection()
    {
        session_start(); // Inicializa la sesión
        if (!isset($_SESSION['id_usuario'])) {
            // Redirige al inicio de sesión si no está autenticado
            header('Location: index.php?c=Usuarios&a=login');
            exit;
        }

        // Verifica si se pasa el parámetro 'n' en la URL
        $id_usuario = $_SESSION['id_usuario']; // Por defecto toma el de la sesión
        if (isset($_GET['n']) && $_GET['n'] == $id_usuario) {
            // Si el parámetro 'n' coincide con el id de la sesión, continúa
            $activeLink = 'cursos';
            require_once "Views/Cursos/apartado-cursos.php"; // Carga la vista
        } else {
            // Redirige a error si el 'n' no coincide o no está presente
            header('Location: index.php?c=Usuarios&a=error');
            exit;
        }
    }


    public function maestrosSection()
    {
        session_start(); // Inicializa la sesión
    
        // Verifica si el usuario ha iniciado sesión
        if (!isset($_SESSION['id_usuario'])) {
            header('Location: index.php?c=Usuarios&a=login');
            exit;
        }
    
        // Verifica si se pasa el parámetro 'n' en la URL
        $id_usuario = $_SESSION['id_usuario']; // Por defecto toma el de la sesión
        if (isset($_GET['n']) && $_GET['n'] == $id_usuario) {
            // Si el parámetro 'n' coincide con el id de la sesión, continúa
            $activeLink = 'profesores';
            require_once "Views/Cursos/apartado-maestros.php"; // Carga la vista
        } else {
            // Redirige a error si el 'n' no coincide o no está presente
            header('Location: index.php?c=Usuarios&a=error');
            exit;
        }
    }
    


    public function inicio2()
{
    session_start(); // Inicializa la sesión

    // Solo redirigir a login si no hay sesión para usuarios que necesiten estar logueados
    if (isset($_SESSION['id_usuario'])) {
        // Si la sesión está activa, asignar el enlace como activo
        $activeLink = 'inicio'; // Esto marca el enlace de Inicio como activo
        require_once "Views/main/index.php"; // Vista para usuarios autenticados
    } else {
        // Si no hay sesión activa, se puede permitir el acceso de todos
        // Puedes asignar un valor de $activeLink sin redirigir al login
        $activeLink = 'inicio'; // Esto sigue marcando el enlace de Inicio como activo
        require_once "Views/main/index.php"; // Vista para no autenticados
    }
}

}
