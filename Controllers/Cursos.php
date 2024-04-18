<?php
class CursosController
{
    //Incuimos los modelos que vamos a utilizar
    public function __construct()
    {
        require_once "Models/CursosModel.php";
    }


    public function index()
    {
        require_once "Views/alumno/index.php";
    }
    public function index2()
    {
        require_once "Views/docente/busqueda.php";
    }

    public function cursos() {
        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['busqueda'])) {
            $busqueda = $_POST['busqueda'];
            $cursoModel = new CursoModel();
            $resultados = $cursoModel->getCursosByBusqueda($busqueda);
            
            echo json_encode($resultados);
        } else {
            echo json_encode(array('error' => 'No se proporcionó una cadena de búsqueda.'));
        }
    }
   
}