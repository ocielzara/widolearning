<?php

class AdministradorModel
{
    /* NOTAS!
    query es adecuado para consultas simples sin parámetros dinámicos.
    prepare es preferible cuando trabajas con consultas que incluyen parámetros variables o cuando necesitas ejecutar la misma consulta varias veces con diferentes datos.
    */
    private $db;
    private $administrador;

    public function __construct()
    {
        $this->db = Conectar::conexion();
        $this->administrador = array();
    }
    
    public function insertarMentor($nombreMentor, $areaMentor, $correoMentor, $tipoMentor, $telefonoMentor, $acercaMentor, $fotoURL)
{
    // Verificar si el correo electrónico ya existe en la base de datos
    $query = "SELECT COUNT(*) as count FROM Mentor WHERE Correo = ?";
    $stmt = $this->db->prepare($query);
    $stmt->bind_param("s", $correoMentor);
    $stmt->execute();
    $stmt->bind_result($count);
    $stmt->fetch();
    $stmt->close();

    if ($count > 0) {
        // El correo electrónico ya está registrado, devolver un mensaje de error
        return "El correo electrónico ya está registrado como mentor.";
    } else {
        // El correo electrónico no está registrado, proceder con la inserción del mentor
        $query = "INSERT INTO Mentor (Nombre, Area, Correo, Tipo, Notificacion_Cel, Foto, acercademi) VALUES (?, ?, ?, ?, ?, ?, ?)";
        $stmt = $this->db->prepare($query);
        /**
        Método bind_param: Se utiliza "sssssss" en bind_param para indicar que todos los parámetros son cadenas de texto (s).NOTA EL NUMERO DE S DEPENDE DEL NUMERO DE PARAMETROS!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!1
        */
        $stmt->bind_param("sssssss", $nombreMentor, $areaMentor, $correoMentor, $tipoMentor, $telefonoMentor, $fotoURL, $acercaMentor);
        
        if ($stmt->execute()) {
            return "¡Mentor registrado exitosamente!";
        } else {
            return "Error al registrar al mentor. Por favor, inténtalo de nuevo más tarde.";
        }
    }
}



    public function crearAsignacionModel($mentorId, $cursoId) {
    $query = "INSERT INTO asignaciones (id_maestro, id_curso) VALUES (?, ?)";
    
    // Preparar la consulta
    $stmt = $this->db->prepare($query);
    
    // Vincular los parámetros
    $stmt->bind_param("ii", $mentorId, $cursoId); // "ii" indica que ambos parámetros son enteros
    
    // Ejecutar la consulta
    if ($stmt->execute()) {
        return ['success' => true, 'message' => 'Asignación registrada.'];
    } else {
        // En caso de error en la ejecución
        return ['success' => false, 'message' => 'Error al registrar la asignación.'];
    }
}



    public function informacionMentor($correoMentor)
{
    // Verificar si el correo electrónico ya existe en la base de datos y obtener el ID del mentor
    $query = "SELECT Mentor_ID FROM Mentor WHERE Correo = ?";
    $stmt = $this->db->prepare($query);
    $stmt->bind_param("s", $correoMentor);
    $stmt->execute();
    $stmt->bind_result($idMentor);
    $stmt->fetch();
    $stmt->close();
    
    return $idMentor; // Devuelve el ID del mentor si existe
}


  public function loginMentor($idMentor, $correoMentor)
{
        $query = "INSERT INTO mentor_login (Mentor_ID, Username, Password) VALUES (?, ?, ?)";
        $stmt = $this->db->prepare($query);
        /**
        Método bind_param: Se utiliza "sssssss" en bind_param para indicar que todos los parámetros son cadenas de texto (s).NOTA EL NUMERO DE S DEPENDE DEL NUMERO DE PARAMETROS
         bind_param: El tipo de parámetro para idMentor debería ser i (entero) si idMentor es de tipo entero!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!1
        */
        $contraseña_hash = password_hash("12345678", PASSWORD_DEFAULT);
        $stmt->bind_param("iss", $idMentor, $correoMentor, $contraseña_hash);
        
        if ($stmt->execute()) {
            return "¡Mentor registrado exitosamente!";
        } else {
            return "Error al registrar al mentor. Por favor, inténtalo de nuevo más tarde.";
        }
}

    // Nuevo método para obtener todas las inscripciones
    public function getAllInscripcion()
    {
        $query = "
            SELECT 
                i.id_inscripcion,
                u.id_usuario, 
                u.nombre AS nombre_usuario, 
                m.Mentor_ID AS id_mentor, 
                m.Nombre AS nombre_mentor, 
                c.id_curso, 
                c.nombre AS nombre_curso, 
                i.estado
            FROM 
                inscripciones i
            JOIN 
                usuarios u ON i.id_usuario = u.id_usuario
            JOIN 
                asignaciones a ON i.id_asignacion = a.id_asignacion
            JOIN 
                cursos c ON a.id_curso = c.id_curso
            JOIN 
                Mentor m ON a.id_maestro = m.Mentor_ID WHERE i.estado = 'empezo'
        ";

        $result = $this->db->query($query);

        while ($row = $result->fetch_assoc()) {
            $this->administrador[] = $row;
        }

        return $this->administrador;
    }
    
    public function insertaInscripcion($idInscripcion)
    {
        // Iniciar una transacción
        $this->db->begin_transaction();

        try {
            // Insertar en la tabla rutaAprendizaje
            $queryInsert = "INSERT INTO rutaAprendizaje (id_inscripcion, creditos, cursados) VALUES (?, 20, 1)";
            $stmtInsert = $this->db->prepare($queryInsert);
            $stmtInsert->bind_param("i", $idInscripcion);
            $stmtInsert->execute();
            $stmtInsert->close();

            // Actualizar el estado en la tabla inscripciones
            $queryUpdate = "UPDATE inscripciones SET estado = 'cursando' WHERE id_inscripcion = ?";
            $stmtUpdate = $this->db->prepare($queryUpdate);
            $stmtUpdate->bind_param("i", $idInscripcion);
            $stmtUpdate->execute();
            $stmtUpdate->close();

            // Confirmar la transacción
            $this->db->commit();

            return ["success" => true, "message" => "Inscripción confirmada exitosamente"];
        } catch (Exception $e) {
            // Revertir la transacción en caso de error
            $this->db->rollback();
            return ["success" => false, "message" => "Error al confirmar la inscripción: " . $e->getMessage()];
        }
    }
    
    //OBTENER 
     public function getAllCursosA()
    {
        $query = "SELECT * FROM cursos";
        $stmt = $this->db->prepare($query);
        $stmt->execute();

        $result = $stmt->get_result(); // Obtener el resultado de la consulta

        $cursos = array();
        if ($result) {
            while ($curso = $result->fetch_assoc()) {
                $cursos[] = $curso;
            }
        }

        // Devolver los cursos obtenidos de la base de datos
        return $cursos;
    }
    
    //OBTENER 
    public function getAllMentoresA()
    {
        $query = "SELECT * FROM Mentor WHERE estado = 'activo' ";
        $stmt = $this->db->prepare($query);
        $stmt->execute();

        $result = $stmt->get_result(); // Obtener el resultado de la consulta

        $mentores = array();
        if ($result) {
            while ($mentor = $result->fetch_assoc()) {
                $mentores[] = $mentor;
            }
        }

        // Devolver los cursos obtenidos de la base de datos
        return $mentores;
    }
    
    //OBTENER 
    public function getAllUsuariosA()
    {
        $query = "SELECT * FROM usuarios WHERE estado = 'activo'";
        $stmt = $this->db->prepare($query);
        $stmt->execute();

        $result = $stmt->get_result(); // Obtener el resultado de la consulta

        $usuarios = array();
        if ($result) {
            while ($usuario = $result->fetch_assoc()) {
                $usuarios[] = $usuario;
            }
        }

        // Devolver los cursos obtenidos de la base de datos
        return $usuarios;
    }
    
    //OBTENER 
    public function getNumerosTotalA()
    {
        // Consulta SQL para contar usuarios, cursos y mentores activos
        $query = "
            SELECT 
                (SELECT COUNT(*) FROM usuarios) AS totalUsuarios,
                (SELECT COUNT(*) FROM cursos) AS totalCursos,
                (SELECT COUNT(*) FROM Mentor WHERE estado = 'activo') AS totalMentores
        ";
        
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        
        $result = $stmt->get_result(); // Obtener el resultado de la consulta
        
        // Obtener el conteo total
        $data = $result->fetch_assoc();
        
        // Devolver los conteos obtenidos de la base de datos
        return $data;
    }
    
    //OBTENER 
    public function getAllAprendizajeA()
    {
        $query = "SELECT 
        c.nombre AS Curso,
        m.Nombre AS Mentor,
        u.nombre AS Usuario,
        r.creditos AS CreditosTotales,
        r.cursados AS CursosCursados
    FROM 
        rutaAprendizaje r
    JOIN 
        inscripciones i ON r.id_inscripcion = i.id_inscripcion
    JOIN 
        asignaciones a ON i.id_asignacion = a.id_asignacion
    JOIN 
        cursos c ON a.id_curso = c.id_curso
    JOIN 
        Mentor m ON a.id_maestro = m.Mentor_ID
    JOIN 
        usuarios u ON i.id_usuario = u.id_usuario
    WHERE 
        r.cursados < 20";
        $stmt = $this->db->prepare($query);
        $stmt->execute();

        $result = $stmt->get_result(); // Obtener el resultado de la consulta

        $aprendizajes = array();
        if ($result) {
            while ($aprendizaje = $result->fetch_assoc()) {
                $aprendizajes[] = $aprendizaje;
            }
        }

        // Devolver los cursos obtenidos de la base de datos
        return $aprendizajes;
    }
    
    
    //OBTENER 
    public function getTopCursos()
    {
        $query = "
    SELECT 
        c.nombre AS NombreCurso, 
        COUNT(i.id_inscripcion) AS TotalCompras
    FROM 
        cursos c
    JOIN 
        asignaciones a ON c.id_curso = a.id_curso
    JOIN 
        inscripciones i ON a.id_asignacion = i.id_asignacion
    WHERE 
        i.estado = 'cursando'
    GROUP BY 
        c.id_curso
    ORDER BY 
        TotalCompras DESC;
        ";
        $stmt = $this->db->prepare($query);
        $stmt->execute();

        $result = $stmt->get_result(); // Obtener el resultado de la consulta

        $cursosTops = array();
        if ($result) {
            while ($cursosTop = $result->fetch_assoc()) {
                $cursosTops[] = $cursosTop;
            }
        }

        // Devolver los cursos obtenidos de la base de datos
        return $cursosTops;
    }
    
    //OBTENER 
    public function getTopMentores()
    {
        $query = "
    SELECT 
        m.Nombre AS NombreMentor, 
        COUNT(i.id_inscripcion) AS TotalInscripciones
    FROM 
        Mentor m
    JOIN 
        asignaciones a ON m.Mentor_ID = a.id_maestro
    JOIN 
        inscripciones i ON a.id_asignacion = i.id_asignacion
    WHERE 
        i.estado = 'cursando' AND m.estado = 'activo'
    GROUP BY 
        m.Mentor_ID
    ORDER BY 
        TotalInscripciones DESC;
        ";
        $stmt = $this->db->prepare($query);
        $stmt->execute();

        $result = $stmt->get_result(); // Obtener el resultado de la consulta

        $cursosTops = array();
        if ($result) {
            while ($cursosTop = $result->fetch_assoc()) {
                $cursosTops[] = $cursosTop;
            }
        }

        // Devolver los cursos obtenidos de la base de datos
        return $cursosTops;
    }
    
    
    public function asignacionCursoMentor($idMentor, $cursoId) {
        // Implementar la inserción en la tabla asignacionCursoMentor
        // Ejemplo:
        $sql = "INSERT INTO asignaciones (id_maestro, id_curso) VALUES (?, ?)";
        $stmt = $this->db->prepare($sql);
        $stmt->bind_param("ii", $idMentor, $cursoId);
        if ($stmt->execute()) {
            return true;
        } else {
            return "Error al asignar curso al mentor: " . $stmt->error;
        }
    }
    
    /*CAMBIOS SEP-DIC********************************************************************/
    
    //Nueva funcion para obtener mentores y los cursos que imparten
    
    public function getMentoresYCursos()
    {
        //Definir la consulta SQL
        $query = "
            SELECT 
                m.Mentor_ID AS id_maestro,
                m.Nombre AS Mentor,
                c.id_curso,
                c.nombre AS Curso
            FROM 
                asignaciones a
            JOIN 
                Mentor m ON a.id_maestro = m.Mentor_ID
            JOIN 
                cursos c ON a.id_curso = c.id_curso
            WHERE 
                a.estado = 'activo';
        ";
        
        //Ejecutar la consulta
        $result = $this->db->query($query);
        
        //Inicializa un array para almacenar los resultados
        $mentoresYCursos = array();
        
        // Recorrer los resultados y almacenarlos en el array
        while ($row = $result->fetch_assoc()) {
            $mentoresYCursos[] = $row;
        }

        // Devolver el array de resultados
        return $mentoresYCursos;
    }
    
    
    //ELIMINAR ASIGNACION
    
    public function eliminarAsignacion($idMentor, $idCurso)
{
    // Iniciar una transacción para asegurar la consistencia de los datos
    $this->db->begin_transaction();

    try {
        // Actualizar la tabla asignaciones para marcar la asignación como inactiva
        $query = "UPDATE asignaciones SET estado = 'inactivo' WHERE id_maestro = ? AND id_curso = ?";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param("ii", $idMentor, $idCurso);

        // Ejecutar la consulta
        if ($stmt->execute()) {
            // Confirmar la transacción
            $stmt->close();
            $this->db->commit();
            return ['success' => true, 'message' => 'Asignación eliminada correctamente.'];
        } else {
            // Revertir la transacción en caso de error
            $stmt->close();
            $this->db->rollback();
            return ['success' => false, 'message' => 'Error al eliminar la asignación.'];
        }
    } catch (Exception $e) {
        // Revertir la transacción en caso de excepción
        $this->db->rollback();
        return ['success' => false, 'message' => 'Error: ' . $e->getMessage()];
    }
}


//ELIMINAR MENTOR
    
    public function eliminarMentor($idMentor)
{
    // Iniciar una transacción para asegurar la consistencia de los datos
    $this->db->begin_transaction();

    try {
        // Actualizar la tabla asignaciones para marcar la asignación como inactiva
        $query = "UPDATE Mentor SET estado = 'inactivo' WHERE Mentor_ID = ?";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param("i", $idMentor);

        // Ejecutar la consulta
        if ($stmt->execute()) {
            // Confirmar la transacción
            $stmt->close();
            $this->db->commit();
            return ['success' => true, 'message' => 'Mentor eliminado correctamente.'];
        } else {
            // Revertir la transacción en caso de error
            $stmt->close();
            $this->db->rollback();
            return ['success' => false, 'message' => 'Error al eliminar el mentor.'];
        }
    } catch (Exception $e) {
        // Revertir la transacción en caso de excepción
        $this->db->rollback();
        return ['success' => false, 'message' => 'Error: ' . $e->getMessage()];
    }
}



//ELIMINAR Usuario
    public function eliminarUsuario($idUsuario)
{
    // Iniciar una transacción para asegurar la consistencia de los datos
    $this->db->begin_transaction();

    try {
        // Actualizar la tabla asignaciones para marcar la asignación como inactiva
        $query = "UPDATE usuarios SET estado = 'inactivo' WHERE id_usuario = ?";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param("i", $idUsuario);

        // Ejecutar la consulta
        if ($stmt->execute()) {
            // Confirmar la transacción
            $stmt->close();
            $this->db->commit();
            return ['success' => true, 'message' => 'Usuario eliminado correctamente.'];
        } else {
            // Revertir la transacción en caso de error
            $stmt->close();
            $this->db->rollback();
            return ['success' => false, 'message' => 'Error al eliminar al usuario.'];
        }
    } catch (Exception $e) {
        // Revertir la transacción en caso de excepción
        $this->db->rollback();
        return ['success' => false, 'message' => 'Error: ' . $e->getMessage()];
    }
}

    
    
    
    

}
