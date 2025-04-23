<?php

class Vehiculo{
    protected string $color;
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
public function getcolor()
{
    return $this->color;
}
}

class Avion extends Vehiculo{

}

class Carro extends Vehiculo{
private $numerodeRuedas;

public function __construct($numerodeRuedas,$color, $marca)
{
$this ->numerodeRuedas = $numerodeRuedas;
parent::__construct($color, $marca);
}
 public function getNumerodeRuedas()
{
    return $this ->numerodeRuedas;
} 

public function getcolor2()
{
    return $this ->color;
}

}
$miAvion = new Carro (4,"Morado", "Aston Martin");
$miAvion->transporte();

$miCarro = new Carro (4,"Rojo","Volvo");
echo "<br>";
echo "<br>";
echo  " El numero de ruedas es: " .$miCarro->getNumerodeRuedas();
echo "<br>";
echo  " El Color es: " .$miCarro->getcolor2();

?>