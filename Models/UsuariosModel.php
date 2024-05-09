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

    public function validarUsuario($correo, $contrasena)
    {
        // Obtener el hash de contraseña de la base de datos
        $query = "SELECT id_usuario, contraseña FROM usuarios WHERE correo_electronico = ?";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param("s", $correo);
        $stmt->execute();
        $stmt->store_result();

        // Verificar si se encontró el usuario
        if ($stmt->num_rows > 0) {
            $stmt->bind_result($id_usuario, $contraseña_hash);
            $stmt->fetch();

            // Verificar la contraseña
            if (password_verify($contrasena, $contraseña_hash)) {
                return $id_usuario; // Devolver el ID del usuario
            }
        }

        return false; // Usuario no encontrado o contraseña incorrecta
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

    public function actualizarContrasena($idUsuario, $nuevaContrasena)
    {
        $con_MD5 = md5($nuevaContrasena);
        $query = "UPDATE usuarios SET contraseña = '$con_MD5' WHERE id_usuario = $idUsuario";
        return mysqli_query($this->db, $query);
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
}
