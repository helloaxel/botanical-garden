<?php
require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../Controller/PlantaController.php';

$controlador = new PlantaController();
$controlador->mostrarLista();


?>