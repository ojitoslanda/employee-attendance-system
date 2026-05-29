<?php
require_once __DIR__ . '/../core/Controller.php';
require_once __DIR__ . '/../models/Empleado.php';

// Controlador para el módulo de empleados.
class EmpleadosController extends Controller {

    public function index(): void {
        $this->reporte();
    }

    public function reporte(): void {
        if (!isset($_SESSION['usuario'])) {
            header("Location: " . BASE_URL . "/login");
            exit();
        }
        $this->soloSuperAdmin();

        // Cargamos el modelo y obtenemos los datos de empleados.
        $modelo = new Empleado();
        $variable_empleados = $modelo->obtenerEmpleados();

        // Enviamos los datos a la vista.
        $this->view('empleados/reportes', [
            'usuario' => $_SESSION['usuario'],
            'empleados' => $variable_empleados
        ]);
    }

    public function reportes(): void {
        $this->reporte();
    }

    public function eliminar_empleado():void{
        require_once __DIR__ . '/../models/Empleado.php'; //llamamos al models
        $idEmpleado = $_POST['id_empleadito'];
        $empleado = new Empleado(); //Instanciamos la clase o objeto
        $resultado = $empleado->eliminarPorIdEmpleado($idEmpleado); 
        //echo "ID__" . $idEmpleado;
        header('Content-Type: application/json');
        if($resultado){ //Si es verdadero, ejecuta esto
            echo json_encode(['eliminar'=>true]);
        }else{ //Si es falso, ejectura esto
            echo json_encode(['eliminar'=>false]);
        }
    } 

    //EmpleadosController -> Mostrar la vista de REGISTRO+
    public function registro(): void {
          if (!isset($_SESSION['usuario'])) {
            header("Location: " . BASE_URL . "/login");
            exit();
        }
         // Enviamos los datos a la vista.
        $this->view('empleados/registro', [
            'usuario' => $_SESSION['usuario'],
        ]);
    }

    public function guardar():void{
        $nombre  =  $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $dni = $_POST['dni'];
        $celular = $_POST['celular'];
        $correo = $_POST['correo'];
        $cargo = '';
        echo $nombre."<br>";
        echo $apellido."<br>";
        echo $dni."<br>";
        echo $celular."<br>";
        echo $correo."<br>";
    }
    
}
