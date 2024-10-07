<?php

class CursoModel
{
    private $db;
    private $curso;

    public function __construct()
    {
        $this->db = Conectar::conexion();
        $this->curso = array();
    }

    public function getCursosByBusqueda($id)
    {
        $id2 = "%$id%";
        $sql = "SELECT * FROM motorBusqueda WHERE titulo LIKE ?";
        $stmt = $this->db->prepare($sql);
        $stmt->bind_param('s', $id2);
        $stmt->execute();

        $result = $stmt->get_result(); // Obtener el resultado de la consulta

        $rows = array(); // Inicializar un array para almacenar todas las filas

        // Iterar sobre cada fila y almacenarla en el array
        while ($row = $result->fetch_assoc()) {
            $rows[] = $row;
        }

        if (!empty($rows)) {
            return $rows;
        } else {
            return 0; // No se encontraron resultados
        }
    }

    public function getAllCursos()
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

    public function getCursosForType($typoCurso)
    {
        $query = "SELECT * FROM cursos WHERE tipo = '$typoCurso'";
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

    public function getAsesorias()
    {
        $query = "SELECT * FROM asesoria";
        $stmt = $this->db->prepare($query);
        $stmt->execute();

        $result = $stmt->get_result(); // Obtener el resultado de la consulta

        $asesorias = array();
        if ($result) {
            while ($curso = $result->fetch_assoc()) {
                $asesorias[] = $curso;
            }
        }

        // Devolver los asesorias obtenidos de la base de datos
        return $asesorias;
    }
    public function getCursoById($idCurso)
    {
        $query = "SELECT * FROM cursos WHERE id_curso = ?"; // Asegúrate de que 'curso_id' sea el nombre correcto de la columna
        $stmt = $this->db->prepare($query);
    
        // Comprobar si la preparación falló
        if (!$stmt) {
            die("Error en la preparación de la consulta: " . $this->db->error); // Imprime el error
        }
    
        $stmt->bind_param('i', $idCurso);
        $stmt->execute();
    
        $result = $stmt->get_result(); // Obtener el resultado de la consulta
    
        if ($result) {
            return $result->fetch_assoc(); // Devolver el curso encontrado
        }
    
        return null; // Devolver null si no se encuentra el curso
    }
    
    
    
}
