<?php
//Llamamos a los datos extra de los archivos config/config.php y model/login.php
// DIR es direccion del archivo que ocupas por ejemplo
// localhost/proyecto/app/
require_once __DIR__ .'/../config/config.php';
require_once __DIR__ .'/../models/Login.php';

Class LoginController{
    public function login():void{
        //variable que te va servir, si algun error exista.
        $error = null; 
        //datos del FORMULARIO del Login
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            $usuario = trim($_POST['user'] ?? '');
            $clave = trim($_POST['pass'] ?? '');
            if(empty($usuario) || empty($clave)){
                $error = "Completa todos los campos, porfavor.";
            }else{
                //Llamamos al objeto del modelo/LOGIN
                $LoginUsuario = (new Login())->login($usuario,$clave);
            }
        }
    }

}
