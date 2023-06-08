<?php 
 class Empleado{
    private $Nombre;
    private $Apellidos;
    private $Sueldo;
    public function __construct($Nombre,$Apellidos,$Sueldo){
        $this->Nombre = $Nombre;
        $this->Apellidos = $Apellidos;
        $this->Sueldo = $Sueldo;
    }
    public function getNombre(){
        return $this->Nombre;
    }
    public function getApellidos(){
        return $this->Apellidos;
    }
    public function getSueldo(){
        return $this->Sueldo;
    }
 }
?>
<?php 
 $objetoEmpleado = new Empleado('Jose Luis','Chavez G','1500');
 echo $objetoEmpleado->getNombre();
 echo $objetoEmpleado->getApellidos();
 echo $objetoEmpleado->getSueldo();

 $objetoEmpleado1 = new Empleado('Josue','Hernadez','5500');
 echo $objetoEmpleado1->getNombre();
 echo $objetoEmpleado1->getApellidos();
 echo $objetoEmpleado1->getSueldo();
 var_dump($objetoEmpleado1);

?>
<?php 
class Persona{
    public $Nombres;
    public function MostrarNombre(){
        return $this->Nombres;
    }
}
$persona = new Persona();
$persona->Nombres = 'David Luis';
echo $persona->MostrarNombre();
var_dump($persona);
?>