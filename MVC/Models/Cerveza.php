<?php

class Cerveza{
    private $nombre;
    private $marca ;

    public function __construct($nombre, $marca){
        $this->nombre = $nombre;
        $this->marca = $marca;
    }
public function getNombre(){
    return $this->nombre;
}

public function setMarca(){
    return $this->marca;
}

}

?>