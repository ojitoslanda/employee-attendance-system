<?php
define("TITLE_BUSINESS", "ASISTENCIA");

// Leemos el archivo .env que esta en el archivo.
$envFile = dirname(__DIR__,2).'/.env';

// # PHP NO SE PUEDE LEER  archivos .ENV
define("DB_HOST",  ?? 'localhost');
define("DB_PORT",  ?? '3306');
define("DB_NAME",  ?? '');
define("DB_USER",  ?? 'root');
define("DB_PASS",  ?? '');