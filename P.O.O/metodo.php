<?php

class Vehiculo{

public function manejar(){
    echo "estoy manejando";
}
protected function arrancar(){
    echo "estoy arrancando";
}
private function detenerse(){
    echo "Detenido";
}
public function detenersePadre(){
    $this ->detenerse(); 
}
}

class Carro extends Vehiculo{

    public function girar()
    {
        echo "Estoy girando";
    } 
    public function claxon()
    {
        echo "Piiiii!!!, Piiiii!!";
     }
public function arrancar2()
{
    $this->arrancar();
}
public function detenerse2(){
    echo "Me detuve por falata de combustible ";
    $this->detenersePadre();    
}

}

$micarro =new Carro();
$micarro->detenerse2();

?>
