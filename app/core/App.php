<?php
require_once __DIR__ . '/Router.php';

class App {

    public function run(): void {
        // Iniciamos las sesiones de PHP aquí para que estén disponibles
        // en todos los controladores sin tener que llamar session_start() en cada uno.
        session_start();

        // Creamos el Router y le decimos que procese la petición actual.
        $router = new Router();
        $router->run();
    }
}
