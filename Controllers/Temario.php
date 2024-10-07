
<?php
require_once "Models/CursosModel.php"; // Asegúrate de que la ruta es correcta


class TemarioController {

    private $modelo;

    public function __construct() {
        $this->modelo = new CursoModel();
    }

    public function ver($idCurso) {
        // Comprueba que el ID no sea nulo o vacío
        if ($idCurso === null || $idCurso === '') {
            die("ID del curso no puede ser nulo o vacío.");
        }
    
        // Llama a tu modelo para obtener los datos del curso
        $cursoModel = new CursoModel(); 
        $curso = $cursoModel->getCursoById($idCurso);
    
        // Verifica si el curso existe
        if ($curso) {
            // Pasa la variable $curso a la vista
            require_once "Views/temario/verTemario.php"; // Incluye la vista
        } else {
            // Manejo de error: curso no encontrado
            echo "Curso no encontrado.";
        }
    }
    
}
