<?php

class AdministradorModel
{
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
                Mentor m ON a.id_maestro = m.Mentor_ID
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

}
