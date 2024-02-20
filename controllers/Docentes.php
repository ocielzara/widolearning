<?php
class DocenteController
{
    //Incuimos los modelos que vamos a utilizar
    public function __construct()
    {
        require_once "Models/DocentesModel.php";
    }


    public function index()
    {
        require_once "views/docente/index.php";
    }

    public function iniciarSesion(){
        $correo = $_POST['correo'];
        $contraseña = $_POST['contraseña'];
        
        $docente = new DocenteModel();
        $maestro = $docente->validarDocente($correo, $contraseña);
        if($maestro){
            require_once "views/docente/vista.php";
        }else{
            require_once "views/docente/index.php";
        }
    }
}
