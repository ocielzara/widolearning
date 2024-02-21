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
    $query = mysqli_query($this->db, "INSERT INTO usuarios (nombre, correo_electronico, contraseña, tipo) VALUES ('$nombre', '$correo', '$con_MD5', 2)");
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

}
