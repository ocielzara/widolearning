<?php

class DocenteModel
{
    private $db;
    private $docente;

    public function __construct()
    {
        $this->db = Conectar::conexion();
        $this->docente = array();
    }

    public function validarDocente($correo, $contrasena)
    {

        //$contrasena = md5($contrasena);

        $query = "SELECT * FROM maestros WHERE correo_electronico = '$correo' AND contraseña = '$contrasena'";
        $resultado = mysqli_query($this->db, $query);

        if (mysqli_num_rows($resultado) > 0) {
            return mysqli_fetch_array($resultado);
        }

        return false;
    }

    public function informacionDocente($nombre)
    {

        $query = "SELECT * FROM maestros WHERE nombre = '$nombre'";
        $resultado = mysqli_query($this->db, $query);
        //CONVERTIR EL RESULTADO A MINISCULAS O MAYUSCULAS !!!!!!!!!!!!!!!!!!!!!!!!!!!

        if (mysqli_num_rows($resultado) > 0) {
            return mysqli_fetch_array($resultado);
        }

        return false;
    }

    public function cursosAsignados($nombre)
    {
        $query = "SELECT c.foto FROM cursos c JOIN asignaciones a ON c.id_curso = a.id_curso JOIN maestros m ON m.id_maestro = a.id_maestro WHERE m.nombre = '$nombre'";
        $resultado = mysqli_query($this->db, $query);

        if ($resultado && mysqli_num_rows($resultado) > 0) {
            return mysqli_fetch_all($resultado, MYSQLI_ASSOC);
        }

        return false;
    }

    public function disponibilidadMaestro($idMaestro)
    {
        $query = "SELECT fecha, hora FROM disponibilidadMaestro WHERE id_maestro = '$idMaestro'";
        $resultado = mysqli_query($this->db, $query);

        // Verificar si se encontraron resultados
        if ($resultado->num_rows > 0) {
            // Inicializar un array para almacenar la disponibilidad
            $disponibilidad = array();

            // Iterar sobre los resultados y almacenarlos en el array de disponibilidad
            while ($row = $resultado->fetch_assoc()) {
                $disponibilidad[] = $row;
            }

            // Devolver el array de disponibilidad
            return $disponibilidad;
        } else {
            // Si no se encontraron resultados, devolver false
            return false;
        }
    }


    public function disponibilidadConsulta($idMaestro)
    {
        $query = "SELECT * FROM disponibilidadMaestro WHERE id_maestro = '$idMaestro'";
        $resultado = mysqli_query($this->db, $query);

        // Verificar si se encontraron resultados
        if ($resultado->num_rows > 0) {
            // Inicializar un array para almacenar la disponibilidad
            $disponibilidad = array();

            // Iterar sobre los resultados y almacenarlos en el array de disponibilidad
            while ($row = $resultado->fetch_assoc()) {
                $disponibilidad[] = $row;
            }

            // Devolver el array de disponibilidad
            return $disponibilidad;
        } else {
            // Si no se encontraron resultados, devolver false
            return false;
        }
    }

    public function insertarDisponibilidad($id, $date, $time)
    {
        // Preparar la consulta SQL
        $query = mysqli_query($this->db, "INSERT INTO disponibilidadMaestro (id_maestro, fecha, hora) VALUES ('$id', '$date', '$time')");
        return true; // La inserción fue exitosa
    }

    public function eliminarDisponibilidad($id)
    {
        // Preparar la consulta SQL
        $query = "DELETE FROM disponibilidadMaestro WHERE id_disponibilidad = $id";

        // Ejecutar la consulta
        $result = mysqli_query($this->db, $query);

        // Verificar si la eliminación fue exitosa
        if ($result) {
            return true; // La eliminación fue exitosa
        } else {
            return false; // Hubo un error al eliminar
        }
    }

    public function consultaDisponibilidadAgenda($id)
    {
        $query = "SELECT * FROM disponibilidadMaestro WHERE id_disponibilidad = '$id'";
        $resultado = mysqli_query($this->db, $query);

        if (mysqli_num_rows($resultado) > 0) {
            return mysqli_fetch_array($resultado);
        }

        return false;
    }

    
    public function actualizarDisponibilidad($id, $date, $time)
{
    // Preparar la consulta SQL de actualización
    $query = "UPDATE disponibilidadMaestro SET fecha = '$date', hora = '$time' WHERE id_disponibilidad = '$id'";

    // Ejecutar la consulta
    $resultado = mysqli_query($this->db, $query);

    // Verificar si la actualización fue exitosa
    if ($resultado) {
        return true; // La actualización fue exitosa
    } else {
        return false; // Hubo un error al actualizar
    }
}

public function consultaNotificaciones($idMaestro)
    {
        $query = "SELECT * FROM notificaciones WHERE id_maestro = '$idMaestro' ORDER BY fecha_creacion DESC";
        $resultado = mysqli_query($this->db, $query);

        // Verificar si se encontraron resultados
        if ($resultado->num_rows > 0) {
            // Inicializar un array para almacenar la disponibilidad
            $consultaNotificacionDatos = array();

            // Iterar sobre los resultados y almacenarlos en el array de disponibilidad
            while ($row = $resultado->fetch_assoc()) {
                $consultaNotificacionDatos[] = $row;
            }

            // Devolver el array de disponibilidad
            return $consultaNotificacionDatos;
        } else {
            // Si no se encontraron resultados, devolver false
            return false;
        }
    }

    public function informacionDocente2($idDocente)
    {
        $query = "SELECT * FROM maestros WHERE id_maestro = '$idDocente'";
        $resultado = mysqli_query($this->db, $query);

        if (mysqli_num_rows($resultado) > 0) {
            return mysqli_fetch_array($resultado);
        }

        return false;
    }

    public function insertarConfirmar($idUsuario, $nombreDocente, $fecha)
    {
        $query = mysqli_query($this->db, "INSERT INTO notificaciones (id_usuario, id_maestro, mensaje, estado, fecha_creacion) VALUES ('$idUsuario', null, 'Ha sido aceptada tu cita del $fecha por el mentor $nombreDocente.', 'noLeida', null)");
        return true; // La inserción fue exitosa
    }
    
    public function insertarRechazar($idUsuario, $nombreDocente, $fecha)
    {
        $query = mysqli_query($this->db, "INSERT INTO notificaciones (id_usuario, id_maestro, mensaje, estado, fecha_creacion) VALUES ('$idUsuario', null, 'Hups! a sido rechazada tu cita del $fecha por el mentor $nombreDocente.', 'noLeida', null)");
        return true; // La inserción fue exitosa
    }

}