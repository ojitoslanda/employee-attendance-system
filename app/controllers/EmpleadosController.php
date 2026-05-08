<?php
require_once __DIR__ . '/../core/Controller.php';

// Controlador para el módulo de empleados.
class EmpleadosController extends Controller {

    // Método por defecto. 
    public function index(): void {
        $this->view('empleados/reportes');
    }


}