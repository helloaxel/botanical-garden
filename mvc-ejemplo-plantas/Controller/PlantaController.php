<?php

require_once __DIR__ . '/../Model/PlantaModel.php';

use Twig\Loader\FilesystemLoader;
use Twig\Environment;

class PlantaController {
    private $model;
    private $twig;

    public function __construct() {
        $this->model = new PlantaModel();
        $loader = new FilesystemLoader((__DIR__ . '/../views'));
        $this->twig = new Environment($loader);
    }

    public function mostrarLista() {
        $plantas = $this->model->obtenerPlantas();
        //include __DIR__ . '/../View/PlantaView.php';
        echo $this->twig->render('lista_plantas.twig', [
            'titulo' => 'Listado de Plantas',
            'plantas' => $plantas
        ]);
    }

}


?>