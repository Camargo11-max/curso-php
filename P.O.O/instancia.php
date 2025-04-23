<?php

class Coche {
    public string $color;
    public string $marca; 
    public int $modelo; 
    public bool $esNuevo;

    public function vender () {
        echo "Se esta vendiendo el coche " .$this->modelo;

}

}

$cocheVerde = new Coche ();
$cocheVerde->color = "Rojo";
$cocheVerde->marca = "Scania";
$cocheVerde->modelo = 2006;
$cocheVerde->esNuevo = true;


$coche2 = new Coche ();
 $coche2->color = "Morado";   
 $coche2->marca = "Volvo";
 $coche2->modelo = 1995;
 $coche2->esNuevo = false;

 echo "El objeto coche verde es de modelo: ". $cocheVerde->modelo;
 echo "<br>";
 $coche2 -> vender ();
 echo "<br>";
 $cocheVerde -> vender ();

 ?>