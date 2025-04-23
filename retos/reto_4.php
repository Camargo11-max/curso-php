<?php

class Persona
{

    public string $nombre = "Juaquin";
    public int $edad  = 15;
    public float $altura = 1.89;

    public function  saludar(): void
    {
        echo "Mucho gusto mi nombre es: $this->nombre";
    }

    public function  edad_persona(): void
    {
        echo "<br>";
        echo " Mi edad es: $this->edad";
    }
    public function  obtener_altura(): void
    {
        echo "<br>";
        echo " Mi altura es: $this->altura";
    }
}

$persona_2 = new Persona();
$persona_2->saludar();
$persona_2->edad_persona();
$persona_2->obtener_altura();
