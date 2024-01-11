<?php
//Llamada a la vista
require_once("models/hoteles_models.php");
require_once("views/hoteles_vista.php");

class HotelesController {
    // Obtiene una instancia del modelo y de la vista de tareas
    private $model;
    private $view;
    
    
    public function __construct() {
    $this->model = new hoteles_models();
    $this->view = new hoteles_view();
    }
    // Muestra la lista de tareas
    public function listar() {
    
    $hoteles = $this->model->gethoteles();
    
    $this->view->mostrarhoteles($hoteles);
    }
    }

 
?>
