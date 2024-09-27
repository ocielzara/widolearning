<?php

class UsuarioModel
{
    private $db;
    private $usuario;

    public function __construct()
    {
        $this->db = Conectar::conexion();
        $this->usuario = array();
    }

    public function insertarUsuario($nombre, $correo, $edad, $telefono, $interesesComoTexto, $contraseña)
    {
        // Verificar si el correo electrónico ya existe en la base de datos
        $query = "SELECT COUNT(*) as count FROM usuarios WHERE correo_electronico = ?";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param("s", $correo);
        $stmt->execute();
        $stmt->bind_result($count);
        $stmt->fetch();
        $stmt->close();

        if ($count > 0) {
            // El correo electrónico ya está registrado, devolver un mensaje de error
            return "El correo electrónico ya está registrado.";
        } else {
            // El correo electrónico no está registrado, proceder con la inserción del usuario
            $contraseña_hash = password_hash($contraseña, PASSWORD_DEFAULT);
            $query = "INSERT INTO usuarios (nombre, edad, telefono, interes, correo_electronico, contraseña) VALUES (?, ?, ?, ?, ?, ?)";
            $stmt = $this->db->prepare($query);
            $stmt->bind_param("sissss", $nombre, $edad, $telefono, $interesesComoTexto, $correo, $contraseña_hash);
            if ($stmt->execute()) {
                return "¡Tu cuenta ha sido creada exitosamente!";
            } else {
                return "Error al crear la cuenta. Por favor, inténtalo de nuevo más tarde.";
            }
        }
    }
    
    public function updateUsuario($nombre, $correo, $edad, $telefono, $interesesComoTexto, $idUsuario)
    {
        // Solo actualiza los campos que quieres cambiar
        $query = "UPDATE usuarios SET nombre = ?, edad = ?, telefono = ?, interes = ?, correo_electronico = ? WHERE id_usuario = ?";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param("sisssi", $nombre, $edad, $telefono, $interesesComoTexto, $correo, $idUsuario);
    
        if ($stmt->execute()) {
            return "La actualizacion fue exitosa";
        } else {
            return "Error al crear la cuenta. Por favor, inténtalo de nuevo más tarde.";
        }
    }

    public function validarUsuario($correo, $contrasena)
    {
        // Obtener el hash de contraseña, nombre y correo electrónico del usuario de la base de datos
        $query = "SELECT id_usuario, nombre, correo_electronico, contraseña, tipo FROM usuarios WHERE correo_electronico = ?";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param("s", $correo);
        $stmt->execute();
        $stmt->store_result();

        // Verificar si se encontró el usuario
        if ($stmt->num_rows > 0) {
            $stmt->bind_result($id_usuario, $nombre, $correo_electronico, $contraseña_hash, $tipo);
            $stmt->fetch();

            if (password_verify($contrasena, $contraseña_hash)) {
                return array(
                    'id_usuario' => $id_usuario,
                    'nombre' => $nombre,
                    'correo_electronico' => $correo_electronico,
                    'tipo' => $tipo,
                );
            }
        }

        return false;
    }

    public function motorBusqueda($keyword)
    {

        $query = "SELECT * FROM motorBusqueda WHERE palabrasClave LIKE '%$keyword%'";
        $resultado = mysqli_query($this->db, $query);

        return mysqli_fetch_array($resultado);
    }


    public function datosUsuarios($nombre)
    {
        // Escapar el nombre para evitar inyección SQL (aunque no es lo ideal, es mejor que nada)
        $nombreEscapado = mysqli_real_escape_string($this->db, $nombre);

        $query = "SELECT id_usuario FROM usuarios WHERE nombre = '$nombreEscapado'";
        $resultado = mysqli_query($this->db, $query);

        if ($resultado) {
            $fila = mysqli_fetch_assoc($resultado); // Obtener la fila de resultados
            $id_usuario = $fila['id_usuario']; // Obtener el id_usuario de la fila

            // Realizar la segunda consulta usando el id_usuario obtenido
            $query2 = "SELECT * FROM inscripciones WHERE id_usuario = $id_usuario";
            $resultado2 = mysqli_query($this->db, $query2);

            return $resultado2;
        } else {
            echo "No existe el identificador del usuario";
            return false; // Retornar false en caso de error
        }
    }


    public function informacionCursos($titulo)
    {
        $query = "SELECT descripcion FROM cursos WHERE nombre = '$titulo'";
        $resultado = mysqli_query($this->db, $query);

        // Verificar si la consulta fue exitosa
        if ($resultado) {
            // Devolver el resultado como un arreglo asociativo
            return mysqli_fetch_assoc($resultado);
        } else {
            // Manejar el error si la consulta falla
            return false;
        }
    }


    public function informacionBusqueda($nombre)
    {
        $query = "SELECT * FROM cursos WHERE nombre = '$nombre'";
        $resultado = mysqli_query($this->db, $query);

        // Verificar si la consulta fue exitosa
        if ($resultado) {
            // Devolver el resultado como un arreglo asociativo
            return mysqli_fetch_assoc($resultado);
        } else {
            // Manejar el error si la consulta falla
            return false;
        }
    }

    public function informacionBusquedaAsesoria($nombre)
    {
        echo ($nombre);
        $query = "SELECT * FROM asesoria WHERE nombre = '$nombre'";
        $resultado = mysqli_query($this->db, $query);

        // Verificar si la consulta fue exitosa
        if ($resultado) {
            // Devolver el resultado como un arreglo asociativo
            return mysqli_fetch_assoc($resultado);
        } else {
            // Manejar el error si la consulta falla
            return false;
        }
    }


    public function match($fecha, $nombreCurso)
    {
        $query = "SELECT m.nombre, m.descripcion, m.foto
    FROM maestros m
    JOIN disponibilidadMaestro d ON m.id_maestro = d.id_maestro
    JOIN asignaciones a ON m.id_maestro = a.id_maestro
    JOIN cursos c ON a.id_curso = c.id_curso
    WHERE d.fecha = '$fecha' AND c.nombre = '$nombreCurso'";
        $resultado = mysqli_query($this->db, $query);

        if ($resultado && mysqli_num_rows($resultado) > 0) {
            return mysqli_fetch_all($resultado, MYSQLI_ASSOC);
        }

        return false;
    }

    public function informacionUsario($idUsuario)
    {
        $query = "SELECT * FROM usuarios WHERE id_usuario = '$idUsuario'";
        $resultado = mysqli_query($this->db, $query);

        if (mysqli_num_rows($resultado) > 0) {
            return mysqli_fetch_array($resultado);
        }

        return false;
    }

    public function consultaNotificaciones($idUsuario)
    {
        $query = "SELECT * FROM notificaciones WHERE id_usuario = '$idUsuario' ORDER BY fecha_creacion DESC";
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

    public function agendaCitaDocente($idDocente, $fecha, $hora, $inicioUsuario, $nombreUsuario, $edadUsuario, $interesUsuario)
    {
        $query = mysqli_query($this->db, "INSERT INTO notificaciones (id_usuario, id_maestro, mensaje, estado, fecha_creacion) VALUES (null, '$idDocente', '$inicioUsuario Hola soy $nombreUsuario con edad de $edadUsuario y mantengo intereses en $interesUsuario y me gustaria agendar una cita para $fecha a las $hora gracias.', 'noLeida', null)");
        return true; // La inserción fue exitosa
    }

    public function agendaCitaDocenteBuscado($idDocente, $fecha, $hora, $inicioUsuario, $nombreUsuario, $edadUsuario, $nombreCurso, $objetivo)
    {
        $query = mysqli_query($this->db, "INSERT INTO notificaciones (id_usuario, id_maestro, mensaje, estado, fecha_creacion) VALUES (null, '$idDocente', '$inicioUsuario Hola soy $nombreUsuario con edad de $edadUsuario y mantengo intereses en el curso $nombreCurso, mi objetivo es $objetivo y me gustaria agendar una cita para $fecha a las $hora gracias.', 'noLeida', null)");
        return true; // La inserción fue exitosa
    }

    public function consultaDocentesInformacion()
    {
        $query = "SELECT * FROM maestros";
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

    public function consultaAsesoriasInformacion()
    {
        $query = "SELECT * FROM asesoria";
        $resultado = mysqli_query($this->db, $query);

        // Verificar si se encontraron resultados
        if ($resultado->num_rows > 0) {
            // Inicializar un array para almacenar la disponibilidad
            $consultaAsesoriaDatos = array();

            // Iterar sobre los resultados y almacenarlos en el array de disponibilidad
            while ($row = $resultado->fetch_assoc()) {
                $consultaAsesoriaDatos[] = $row;
            }

            // Devolver el array de disponibilidad
            return $consultaAsesoriaDatos;
        } else {
            // Si no se encontraron resultados, devolver false
            return false;
        }
    }

    public function obtenerUsuarioPorCorreo($correo)
    {
        $query = "SELECT * FROM usuarios WHERE correo_electronico = '$correo'";
        $resultado = mysqli_query($this->db, $query);

        if ($resultado && mysqli_num_rows($resultado) > 0) {
            return mysqli_fetch_array($resultado);
        }

        return false;
    }
    
    public function getUsuario($idUsuario)
    {
        $query = "SELECT * FROM usuarios WHERE id_usuario = ?";
        $stmt = $this->db->prepare($query);
        
        // Vincula el parámetro con el valor del ID
        $stmt->bind_param('i', $idUsuario);
        
        // Ejecuta la consulta
        $stmt->execute();
        
        // Obtiene el resultado de la consulta
        $result = $stmt->get_result();
        
        // Comprueba si se encontró un registro
        if ($result->num_rows > 0) {
            // Devuelve los datos del usuario
            return $result->fetch_assoc(); // fetch_assoc obtiene un solo registro como array asociativo
        } else {
            return null; // No se encontró el usuario
        }
    }
    

    public function actualizarContrasena($idUsuario, $nuevaContrasena)
{
    $contraseña_hash = password_hash($nuevaContrasena, PASSWORD_DEFAULT);
    $query = "UPDATE usuarios SET contraseña = ? WHERE id_usuario = ?";
    $stmt = $this->db->prepare($query);
    $stmt->bind_param("si", $contraseña_hash, $idUsuario);
    return $stmt->execute();
}


    public function generarContraseñaAleatoria($longitud = 10)
    {
        $caracteres = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $contrasena = '';
        for ($i = 0; $i < $longitud; $i++) {
            $contrasena .= $caracteres[rand(0, strlen($caracteres) - 1)];
        }
        return $contrasena;
    }
    
    // CAMBIOS JULIO 24 !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
    public function getAllMentoresYCursos()
{
    // Query SQL para obtener la información requerida
    $query = "SELECT 
                m.Mentor_ID, 
                m.Nombre AS Mentor_Nombre, 
                m.Area, 
                m.Correo, 
                m.Tipo AS Mentor_Tipo, 
                m.Foto AS Mentor_Foto, 
                SUBSTRING(m.acercademi, 1, 80 + LOCATE(' ', SUBSTRING(m.acercademi, 81))) AS acercademi
              FROM 
                Mentor m
              WHERE
                m.estado = 'activo'
              ";

    // Preparar la consulta
    $stmt = $this->db->prepare($query);
    if (!$stmt) {
        // Manejar el error si la preparación de la consulta falla
        throw new Exception("Error al preparar la consulta: " . $this->db->error);
    }

    // Ejecutar la consulta
    $stmt->execute();

    // Obtener el resultado de la consulta
    $result = $stmt->get_result();

    // Inicializar un array para almacenar los resultados
    $mentoresCursos = array();

    // Verificar si hay resultados y procesarlos
    if ($result) {
        while ($row = $result->fetch_assoc()) {
            // Agregar cada fila como un elemento al array $mentoresCursos
            $mentoresCursos[] = $row;
        }
    }

    // Devolver el array con los datos obtenidos de la base de datos
    return $mentoresCursos;
}

public function getMentoresPorTipoCurso($tipoCurso)
{
    $query = "SELECT 
                m.Mentor_ID, 
                m.Nombre AS Mentor_Nombre, 
                m.Area, 
                m.Correo, 
                m.Tipo AS Mentor_Tipo, 
                m.Foto AS Mentor_Foto, 
                SUBSTRING(m.acercademi, 1, 80 + LOCATE(' ', SUBSTRING(m.acercademi, 81))) AS acercademi,
                GROUP_CONCAT(c.id_curso) AS id_cursos,
                GROUP_CONCAT(c.nombre) AS nombres_cursos,
                GROUP_CONCAT(c.tipo) AS tipos_cursos
              FROM 
                Mentor m
              INNER JOIN 
                asignaciones a ON m.Mentor_ID = a.id_maestro
              INNER JOIN 
                cursos c ON a.id_curso = c.id_curso
              WHERE 
                c.tipo = ? AND m.estado = 'activo' AND a.estado = 'activo'
              GROUP BY 
                m.Mentor_ID";

    $stmt = $this->db->prepare($query);
    if (!$stmt) {
        throw new Exception("Error al preparar la consulta: " . $this->db->error);
    }

    $stmt->bind_param('s', $tipoCurso); // 's' indica que el parámetro es de tipo string
    $stmt->execute();
    $result = $stmt->get_result();

    $mentoresCursos = array();
    if ($result) {
        while ($row = $result->fetch_assoc()) {
            $mentoresCursos[] = $row;
        }
    }

    return $mentoresCursos;
}

public function getCursosPorUsuario($idUsuario)
{
    $query = "SELECT 
                c.id_curso,
                c.nombre AS nombre_curso,
                c.foto AS foto_curso,
                c.tipo AS tipo_curso,
                c.icono AS icono_curso,
                m.Mentor_ID,
                m.Nombre AS nombre_mentor,
                ra.creditos,
                ra.cursados
              FROM 
                cursos c
              JOIN 
                asignaciones a ON c.id_curso = a.id_curso
              JOIN 
                Mentor m ON a.id_maestro = m.Mentor_ID
              LEFT JOIN 
                inscripciones i ON a.id_asignacion = i.id_asignacion
              LEFT JOIN 
                rutaAprendizaje ra ON i.id_inscripcion = ra.id_inscripcion
              WHERE 
                i.id_usuario = ?";

    $stmt = $this->db->prepare($query);
    if (!$stmt) {
        throw new Exception("Error al preparar la consulta: " . $this->db->error);
    }

    $stmt->bind_param('i', $idUsuario); // 'i' indica que el parámetro es de tipo integer
    $stmt->execute();
    $result = $stmt->get_result();

    $cursos = array();
    if ($result) {
        while ($row = $result->fetch_assoc()) {
            $cursos[] = $row;
        }
    }

    return $cursos;
}

public function getCreditosCursos($idUsuario, $idCurso, $idMentor)
{
    $query = "SELECT 
                c.id_curso,
                c.nombre AS nombre_curso,
                c.foto AS foto_curso,
                c.tipo AS tipo_curso,
                c.icono AS icono_curso,
                m.Mentor_ID,
                m.Nombre AS nombre_mentor,
                ra.creditos,
                ra.cursados
              FROM 
                cursos c
              JOIN 
                asignaciones a ON c.id_curso = a.id_curso
              JOIN 
                Mentor m ON a.id_maestro = m.Mentor_ID
              LEFT JOIN 
                inscripciones i ON a.id_asignacion = i.id_asignacion
              LEFT JOIN 
                rutaAprendizaje ra ON i.id_inscripcion = ra.id_inscripcion
              WHERE 
                i.id_usuario = ? 
                AND c.id_curso = ?
                AND m.Mentor_ID = ?";

    $stmt = $this->db->prepare($query);
    if (!$stmt) {
        throw new Exception("Error al preparar la consulta: " . $this->db->error);
    }

    $stmt->bind_param('iii', $idUsuario, $idCurso, $idMentor); // 'ii' indica que ambos parámetros son de tipo integer
    $stmt->execute();
    $result = $stmt->get_result();

    $curso = array();
    if ($result) {
        while ($row = $result->fetch_assoc()) {
            $curso[] = $row;
        }
    }

    return $curso;
}

  public function informacionIDcurso($cursoName)
    {
        $query = "SELECT id_curso FROM cursos WHERE nombre = ?";
        $stmt = $this->db->prepare($query);

        if (!$stmt) {
            throw new Exception("Error al preparar la consulta: " . $this->db->error);
        }

        $stmt->bind_param('s', $cursoName);
        $stmt->execute();
        $stmt->bind_result($id_curso);
        $stmt->fetch();

        return $id_curso ? $id_curso : null;
    }
    
    // Nuevo método para obtener el ID de asignación por mentorID y cursoID
     public function informacionIDasignacion($mentorID, $idCurso)
    {
        $query = "SELECT id_asignacion FROM asignaciones WHERE id_maestro = ? AND id_curso = ?";
        $stmt = $this->db->prepare($query);

        if (!$stmt) {
            throw new Exception("Error al preparar la consulta: " . $this->db->error);
        }

        $stmt->bind_param('ii', $mentorID, $idCurso);
        $stmt->execute();
        $stmt->bind_result($id_asignacion);
        $stmt->fetch();

        return $id_asignacion ? $id_asignacion : null;
    }
    
    public function informacionIDusuario($correo)
    {
        $query = "SELECT id_usuario FROM usuarios WHERE correo_electronico = ?";
        $stmt = $this->db->prepare($query);

        if (!$stmt) {
            throw new Exception("Error al preparar la consulta: " . $this->db->error);
        }

        $stmt->bind_param('s', $correo); // 's' indica que el parámetro es de tipo string
        $stmt->execute();
        $stmt->bind_result($id_usuario);
        $stmt->fetch();

        return $id_usuario ? $id_usuario : false;
    }
    
    public function insertaInscripcion($idUsuario, $idAsignacion)
    {
        $query = "INSERT INTO inscripciones (id_usuario, id_asignacion, estado) VALUES (?, ?, 'empezo')";
        $stmt = $this->db->prepare($query);

        if (!$stmt) {
            throw new Exception("Error al preparar la consulta: " . $this->db->error);
        }

        $stmt->bind_param('ii', $idUsuario, $idAsignacion);
        return $stmt->execute();
    }
    
    public function verEstadoInscripcion($idUsuario, $idCurso) {
    $query = "
        SELECT i.estado
        FROM inscripciones i
        JOIN asignaciones a ON i.id_asignacion = a.id_asignacion
        JOIN cursos c ON a.id_curso = c.id_curso
        WHERE i.id_usuario = ? AND c.id_curso = ?
    ";

    $stmt = $this->db->prepare($query);

    if (!$stmt) {
        throw new Exception("Error al preparar la consulta: " . $this->db->error);
    }

    $stmt->bind_param('ii', $idUsuario, $idCurso);
    $stmt->execute();
    $stmt->bind_result($estado);
    $stmt->fetch();

    return $estado ? $estado : null;
}

public function verificarInscripcion($idUsuario, $idAsignacion) {
    $query = "SELECT COUNT(*) FROM inscripciones WHERE id_usuario = ? AND id_asignacion = ?";
    $stmt = $this->db->prepare($query);

    if (!$stmt) {
        throw new Exception("Error al preparar la consulta: " . $this->db->error);
    }

    $stmt->bind_param('ii', $idUsuario, $idAsignacion);
    $stmt->execute();
    $stmt->bind_result($count);
    $stmt->fetch();

    return $count > 0;
}

public function informacionCorreoMentor($mentorID) {
        // Preparar la consulta SQL
        $sql = "SELECT Correo FROM Mentor WHERE Mentor_ID = ?";
        
        // Preparar la declaración
        $stmt = $this->db->prepare($sql);
        
        // Vincular el parámetro
        $stmt->bind_param("i", $mentorID);
        
        // Ejecutar la declaración
        $stmt->execute();
        
        // Obtener el resultado
        $result = $stmt->get_result();
        
        // Verificar si se encontró el mentor
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            return $row['Correo'];
        } else {
            return null; // Si no se encuentra el mentor, devolver null
        }
    }
    

}
