<?php

require_once __DIR__ . '/../Model/PlantaModel.php';

class PlantaController {
    private $model;

    public function __construct() {
        $this->model = new PlantaModel();
    }

    public function mostrarLista() {
        $plantas = $this->model->obtenerPlantas();
        include __DIR__ . '/../View/PlantaView.php';
    }

}


?>