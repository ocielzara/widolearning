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
        $con_MD5 = md5($contraseña);
        // Preparar la consulta SQL
        $query = mysqli_query($this->db, "INSERT INTO usuarios (nombre, edad, telefono, interes, correo_electronico, contraseña) VALUES ('$nombre', '$edad', '$telefono', '$interesesComoTexto', '$correo', '$con_MD5')");
        return true; // La inserción fue exitosa
    }

    public function validarUsuario($correo, $contrasena)
    {
        $contrasena = md5($contrasena);

        $query = "SELECT * FROM usuarios WHERE correo_electronico = '$correo' AND contraseña = '$contrasena'";
        $resultado = mysqli_query($this->db, $query);

        if (mysqli_num_rows($resultado) > 0) {
            return mysqli_fetch_array($resultado);
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


public function match($fecha)
{
    $query = "SELECT m.nombre, m.descripcion, m.foto
    FROM maestros m
    JOIN disponibilidadmaestro d ON m.id_maestro = d.id_maestro
    WHERE d.fecha = '$fecha'";
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
        $query = mysqli_query($this->db, "INSERT INTO notificaciones (id_usuario, id_maestro, mensaje, estado, fecha_creacion) VALUES (null, '$idDocente', '$inicioUsuario Hola soy $nombreUsuario con edad de $edadUsuario y mantengo intereses en $interesUsuario y me gustaria agendar una cita para $fecha $hora gracias.', 'noLeida', null)");
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

}
