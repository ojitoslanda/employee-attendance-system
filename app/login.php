<?php
// Cargamos el controlador. Él se encarga de cargar todo lo demás
// (config, modelo y vista) en el orden correcto.
require_once('controllers/LoginController.php');

// Creamos una instancia del controlador y llamamos al método login().
// Esto activa todo el flujo: mostrar formulario o procesar el POST.
(new LoginController())->login();
