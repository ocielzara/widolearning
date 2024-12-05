<?php
require_once "Models/CursosModel.php"; // Asegúrate de que la ruta sea correcta
require_once "Models/DocentesModel.php";
class AsesoriaController
{


    public function ver()
    {
        session_start(); // Inicializa la sesión
        if (!isset($_SESSION['id_usuario'])) {
            // Redirigir a la página de inicio de sesión si no hay sesión
            header('Location: index.php?c=Usuarios&a=login');
            exit;
        }
        
        // Obtén todas las asesorías
        $asesoriaModel = new CursoModel();
        $asesorias = $asesoriaModel->getAsesorias(); // Método que devuelve todas las asesorías
        $activeLink = 'asesoria';
        // Pasa las asesorías a la vista
        require_once "Views/Asesorias/verAsesoria.php"; // Aquí incluyes la vista que mostrará todas las asesorías
    }

    public function cursosSection()
    {

        session_start(); // Inicializa la sesión
        if (!isset($_SESSION['id_usuario'])) {
            // Redirigir a la página de inicio de sesión si no hay sesión
            header('Location: index.php?c=Usuarios&a=login');
            exit;
        }
        $activeLink = 'cursos';
        // Incluir la vista de cursos, pasando los cursos obtenidos
        require_once "Views/Cursos/apartado-cursos.php";
    }

    public function maestrosSection()
    {
        session_start(); // Inicializa la sesión
    if (!isset($_SESSION['id_usuario'])) {
        // Redirigir a la página de inicio de sesión si no hay sesión
        header('Location: index.php?c=Usuarios&a=login');
        exit;
    }
        $activeLink = 'profesores';
        // Incluir la vista de cursos, pasando los cursos obtenidos
        require_once "Views/Cursos/apartado-maestros.php";
    }


    public function inicio2()
    {
        session_start(); // Inicializa la sesión
    if (!isset($_SESSION['id_usuario'])) {
        // Redirigir a la página de inicio de sesión si no hay sesión
        header('Location: index.php?c=Usuarios&a=login');
        exit;
    }
        $activeLink = 'inicio'; // Esto marca el enlace de Inicio como activo
        require_once "Views/main/index.php";
    }
}
