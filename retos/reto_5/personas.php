<?php

class Personas {

    public string $nombre = "Jaime Andrés";
    public int $edad = 45;
    
    public function presentarse(): void {
        echo "
         Hola  mi nombre es: <strong> $this->nombre </strong> y mi edad es:  <strong> $this->edad años </strong> ";
    }
}

$Objectpersona = new personas();
$Objectpersona->nombre = "Profe Jose Antonio";
$Objectpersona->edad = 28;
$Objectpersona->presentarse();
