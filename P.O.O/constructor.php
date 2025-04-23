<?php

class Coche {
    public string $color;
    public string $marca;
    public int $modelo;
    public bool $esnuevo;

    public function __construct(string $color, string $marca, int $modelo,) 
     {
         $this->color = $color; 
         $this->marca = $marca;
         $this->modelo = $modelo; 
         $this->esnuevo = true;
     }

    public function vender ()
    {
        
        echo "se esta vendiendo el coche:  " .$this->modelo."".$this->marca."".$this->modelo. "".$this->esnuevo."";   
    }

}

$coche = new Coche( "Amarillo","Volvo","2025"); 

var_dump($coche);

?>