<?php
require_once __DIR__ . '/../core/Controller.php';

// Controlador del módulo de asistencias.
// Página pública: los empleados no necesitan iniciar sesión para marcar asistencia.
class AsistenciasController extends Controller {

    // Método por defecto. Se ejecuta cuando el usuario entra a /asistencias
    public function index(): void {
        $this->view('asistencias/index');
    }
}
