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

    public function insertarUsuario($nombre, $correo, $contraseña)
    {
        $con_MD5 = md5($contraseña);
        // Preparar la consulta SQL
        $query = mysqli_query($this->db, "INSERT INTO usuarios (nombre, correo_electronico, contraseña) VALUES ('$nombre', '$correo', '$con_MD5')");
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

}
