<?php
require_once "Models/CursosModel.php"; // Asegúrate de que la ruta sea correcta

class AsesoriaController {

  
        public function ver() {
            // Obtén todas las asesorías
            $asesoriaModel = new CursoModel();
            $asesorias = $asesoriaModel->getAsesorias(); // Método que devuelve todas las asesorías
    
            // Pasa las asesorías a la vista
            require_once "Views/Asesorias/verAsesoria.php"; // Aquí incluyes la vista que mostrará todas las asesorías
        }
  
    
}
