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
        $sql = "SELECT * FROM motorbusqueda WHERE titulo LIKE ?";
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
}
