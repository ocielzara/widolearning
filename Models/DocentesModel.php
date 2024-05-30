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
        // Preparar la consulta para prevenir inyección SQL
        $query = "SELECT * FROM mentor_login WHERE Username = ?";

        if ($stmt = mysqli_prepare($this->db, $query)) {
            // Bind the parameters
            mysqli_stmt_bind_param($stmt, "s", $correo);
            // Execute the statement
            mysqli_stmt_execute($stmt);
            // Get the result
            $resultado = mysqli_stmt_get_result($stmt);

            // Check if the user exists
            if ($resultado && mysqli_num_rows($resultado) > 0) {
                $usuario = mysqli_fetch_array($resultado, MYSQLI_ASSOC);
                // Verify the password
                if (password_verify($contrasena, $usuario['Password'])) {
                    return $usuario;
                }
            }
        }

        return false;
    }


    public function informacionDocente($id)
    {

        $query = "SELECT * FROM Mentor WHERE Mentor_ID = '$id'";
        $resultado = mysqli_query($this->db, $query);
        //CONVERTIR EL RESULTADO A MINISCULAS O MAYUSCULAS !!!!!!!!!!!!!!!!!!!!!!!!!!!

        if (mysqli_num_rows($resultado) > 0) {
            return mysqli_fetch_array($resultado);
        }

        return false;
    }

    public function informacionMentorPorId($mentorId)
    {
        $sql = "
    SELECT 
        m.Mentor_ID, 
        m.Nombre AS Mentor, 
        m.Foto AS MentorFoto, 
        m.Area, 
        m.Correo, 
        m.Tipo, 
        m.Horario_Disponibilidad, 
        m.Notificacion_Cel, 
        c.id_curso, 
        c.nombre AS Curso, 
        c.foto AS CursoFoto, 
        c.tipo AS TipoCurso, 
        c.temario, 
        c.requerimientos, 
        c.pdf, 
        c.precio
    FROM 
        Mentor m
    JOIN 
        asignaciones a ON m.Mentor_ID = a.id_maestro
    JOIN 
        cursos c ON a.id_curso = c.id_curso
    WHERE 
        m.Mentor_ID = ?";

        $stmt = $this->db->prepare($sql);
        $stmt->bind_param('i', $mentorId);
        $stmt->execute();
        $result = $stmt->get_result();

        $mentorInfo = [];
        while ($row = $result->fetch_assoc()) {
            $mentorInfo[] = $row;
        }

        return $mentorInfo;
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

    public function getMentoresByCursoId($cursoId)
    {
        $sql = "
        SELECT m.Mentor_ID, m.Nombre AS Mentor, m.Foto AS MentorFoto, c.nombre AS Curso, c.foto AS CursoFoto, c.tipo AS TipoCurso, c.pdf AS PDF
        FROM Mentor m
        JOIN asignaciones a ON m.Mentor_ID = a.id_maestro
        JOIN cursos c ON a.id_curso = c.id_curso
        WHERE c.id_curso = ?";

        $stmt = $this->db->prepare($sql);
        $stmt->bind_param('i', $cursoId);
        $stmt->execute();
        $result = $stmt->get_result();

        $mentores = [];
        while ($row = $result->fetch_assoc()) {
            $mentores[] = $row;
        }

        return $mentores;
    }
}
