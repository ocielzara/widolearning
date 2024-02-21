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
        $contrasena = md5($contrasena);

        $query = "SELECT * FROM maestros WHERE correo_electronico = '$correo' AND contraseña = '$contrasena'";
        $resultado = mysqli_query($this->db, $query);

        if (mysqli_num_rows($resultado) > 0) {
            return mysqli_fetch_array($resultado);
        }

        return false;
    }
}