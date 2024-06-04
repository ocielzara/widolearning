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

                // Verificar que el usuario fue encontrado
                var_dump($usuario);

                // Verify the password (assumes plain text for now)
                if ($contrasena === $usuario['Password']) {
                    // Obtener información adicional del mentor desde otra tabla
                    $mentorQuery = "SELECT * FROM Mentor WHERE Mentor_ID = ?";
                    if ($mentorStmt = mysqli_prepare($this->db, $mentorQuery)) {
                        mysqli_stmt_bind_param($mentorStmt, "i", $usuario['Mentor_ID']);
                        mysqli_stmt_execute($mentorStmt);
                        $mentorResult = mysqli_stmt_get_result($mentorStmt);
                        if ($mentorResult && mysqli_num_rows($mentorResult) > 0) {
                            $mentorInfo = mysqli_fetch_array($mentorResult, MYSQLI_ASSOC);
                            $usuario['Nombre'] = $mentorInfo['Nombre'];
                        }
                    }
                    return $usuario;
                } else {
                    // Mostrar mensaje de error si la contraseña no coincide
                    echo "La contraseña no coincide.";
                }
            } else {
                // Mostrar mensaje de error si el usuario no fue encontrado
                echo "No se encontró un usuario con ese correo.";
            }
        } else {
            // Mostrar mensaje de error si la consulta no pudo ser preparada
            echo "Error al preparar la consulta.";
        }

        return false;
    }


    public function informacionDocente($id)
    {
        $query = "SELECT * FROM Mentor WHERE Mentor_ID = ?";
        if ($stmt = mysqli_prepare($this->db, $query)) {
            mysqli_stmt_bind_param($stmt, "i", $id);
            mysqli_stmt_execute($stmt);
            $resultado = mysqli_stmt_get_result($stmt);

            if ($resultado && mysqli_num_rows($resultado) > 0) {
                return mysqli_fetch_array($resultado, MYSQLI_ASSOC);
            }
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

    public function insertarDisponibilidad($id_maestro, $dia_semana, $hora)
    {
        $query = "INSERT INTO disponibilidadMaestro (id_maestro, dia_semana, hora) VALUES (?, ?, ?)";
        if ($stmt = $this->db->prepare($query)) {
            $stmt->bind_param('iss', $id_maestro, $dia_semana, $hora);
            return $stmt->execute();
        }
        return false;
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

    public function obtenerDisponibilidadPorMaestroId($id_maestro)
    {
        $query = "SELECT dia_semana, hora FROM disponibilidadMaestro WHERE id_maestro = ?";
        if ($stmt = $this->db->prepare($query)) {
            $stmt->bind_param('i', $id_maestro);
            $stmt->execute();
            $result = $stmt->get_result();
            $disponibilidad = [];
            while ($row = $result->fetch_assoc()) {
                $disponibilidad[] = $row;
            }
            return $disponibilidad;
        }
        return false;
    }
    public function obtenerFechaPorId($id_disponibilidad)
    {
        $query = "SELECT * FROM disponibilidadMaestro WHERE id_disponibilidad = ?";
        if ($stmt = $this->db->prepare($query)) {
            $stmt->bind_param('i', $id_disponibilidad);
            $stmt->execute();
            $result = $stmt->get_result();
            if ($result->num_rows > 0) {
                return $result->fetch_assoc();
            }
        }
        return false;
    }

    public function actualizarDisponibilidad($id, $date, $time)
    {
        $query = "UPDATE disponibilidadMaestro SET dia_semana = ?, hora = ? WHERE id_disponibilidad = ?";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param("ssi", $date, $time, $id);

        $resultado = $stmt->execute();
        if ($resultado) {
            return true;
        } else {
            return false;
        }
    }
    public function consultaNotificaciones($idMaestro)
    {
        $query = "SELECT * FROM notificaciones WHERE id_maestro = '$idMaestro' ORDER BY fecha_creacion DESC";
        $resultado = mysqli_query($this->db, $query);
        if ($resultado->num_rows > 0) {

            $consultaNotificacionDatos = array();

            while ($row = $resultado->fetch_assoc()) {
                $consultaNotificacionDatos[] = $row;
            }
            return $consultaNotificacionDatos;
        } else {
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
        SELECT 
        m.Mentor_ID, 
        m.Nombre AS Mentor, 
        m.Foto AS MentorFoto, 
        c.nombre AS Curso, 
        c.foto AS CursoFoto, 
        c.tipo AS TipoCurso, 
        c.pdf AS PDF,
        d.dia_semana, 
        d.hora
    FROM Mentor m
    JOIN asignaciones a ON m.Mentor_ID = a.id_maestro
    JOIN cursos c ON a.id_curso = c.id_curso
    LEFT JOIN disponibilidadMaestro d ON m.Mentor_ID = d.id_maestro
    WHERE c.id_curso = ?;
    ";

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
