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
            $idDocente = $informacion['id_maestro'];
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

            //Obetenemos los dias y horarios disponibles del maestro
            $informacionDisponibilidad = $docente->disponibilidadMaestro($idDocente);
            // Inicializar un array para almacenar las fechas disponibles
            $fechasDisponibles = array();

            // Iterar sobre las fechas disponibles y agregarlas al array
            foreach ($informacionDisponibilidad as $disponibilidad) {
                $fechasDisponibles[] = $disponibilidad['fecha'];
            }

            require_once "views/docente/perfilDocente.php";
        } else {
            require_once "views/docente/index.php";
        }
    }
}