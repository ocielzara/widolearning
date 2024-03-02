<?php
class DocentesController
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

    public function iniciarSesion()
    {
        $correo = $_POST['correo'];
        $contraseña = $_POST['contraseña'];

        $docente = new DocenteModel();
        $maestro = $docente->validarDocente($correo, $contraseña);
        if ($maestro) {
            require_once "views/docente/vista.php";
        } else {
            require_once "views/docente/index.php";
        }
    }

    public function perfilDocente()
    {
        $nombre = $_POST['nombre'];

        $docente = new DocenteModel();
        $informacion = $docente->informacionDocente($nombre);
        if ($informacion) {
            $nombreDocente = $informacion['nombre'];
            $fotoDocente = $informacion['foto'];
            $descripcionDocente = $informacion['descripcion'];

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
            require_once "views/docente/perfilDocente.php";
        } else {
            require_once "views/docente/index.php";
        }
    }
}