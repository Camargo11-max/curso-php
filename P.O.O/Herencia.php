<?php

class vehiculo{
    public string $color;
    public string $marca;

    public function __construct($color, $marca)
    {
        $this->color = $color;
        $this->marca = $marca;

}
public function transporte()
{
    echo "Soy un vehiculo de marca: "
         .$this->marca.
         " y estoy transportando personas";
}
}

class Avion extends vehiculo{

}

class Carro extends vehiculo{
public $numerodeRuedas;

public function __construct($numerodeRuedas,$color, $marca)
{
$this ->numerodeRuedas = $numerodeRuedas;
parent::__construct($color, $marca);
}

}
$miAvion = new Carro (4,"Morado", "Martin");
$miAvion->transporte();

?>