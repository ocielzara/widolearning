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

    public function informacionDocente($nombre)
    {

        $query = "SELECT * FROM maestros WHERE nombre = '$nombre'";
        $resultado = mysqli_query($this->db, $query);
        //CONVERTIR EL RESULTADO A MINISCULAS O MAYUSCULAS !!!!!!!!!!!!!!!!!!!!!!!!!!!

        if (mysqli_num_rows($resultado) > 0) {
            return mysqli_fetch_array($resultado);
        }

        return false;
    }

    public function cursosAsignados($nombre) {
        $query = "SELECT c.foto FROM Cursos c JOIN Asignaciones a ON c.id_curso = a.id_curso JOIN Maestros m ON m.id_maestro = a.id_maestro WHERE m.nombre = '$nombre'";
        $resultado = mysqli_query($this->db, $query);
    
        if ($resultado && mysqli_num_rows($resultado) > 0) {
            return mysqli_fetch_all($resultado, MYSQLI_ASSOC);
        }
    
        return false;
    }
}