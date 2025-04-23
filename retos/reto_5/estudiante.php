<?php

require_once __DIR__ ."/personas.php";

class Estudiante extends Personas{
    public string $carrera = '';

    public function estudiar():void {

        echo "El estudiante esta en el programa:  <strong> $this->carrera </strong>";
    }

}

echo "<br>";
$ObjectoEstudiante = new Estudiante();
$ObjectoEstudiante->carrera = "Ingeneria de Software";
$ObjectoEstudiante->estudiar();
$ObjectoEstudiante->presentarse() ;

?>