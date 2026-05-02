<?php
//Creamos una clase para el usuario - login
Class Login{
    //Variable para guardar la conexion
    private PDO $pdo;
    //Al crear el modelo, obtenemos la conexion automaticamente.
    public function __construct(){
      $this->db = Database::getConnection();
    }
    //Buscamos un usuario por su nombre y verificamos su contraseña.
    //devuelvo los datos del usuario si es correcto
    public function login(string $nombreUsuario, string $clave):array|false{
      //statement-declaración
      $sql1 = "SELECT * FROM usuario WHERE nombre_usuario = ?";
      $stmt = $this->db->prepare($sql1);
      $stmt->execute([$nombreUsuario]); //convertimos y ejecutamos en un array todos los nombres
      $usuario = $stmt->fetch(); //aqui te muestra 1=true o 0=false
      //Verificamos que si exista el usuario y que la contraseña sea correcta
      //if($usuario && password_verify($clave,$usuario[clave]){ //con hash
      if($usuario && $clave === $usuario['clave']){ //sin hash
        return $usuario; //Login correcto
      }
      return false;
    }
}