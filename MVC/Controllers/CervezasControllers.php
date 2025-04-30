<?php

require_once __DIR__ ."/../Models/Cerveza.php";

class CervezasController{
    public function listaCervezas(){

$cervezas = [
    new Cerveza("Poker", "Bavaria"),
    new Cerveza("Club Colombia","Bavaria")
];

require_once __DIR__ ."/../views/listado_cervezas.php";

    }

public function obtenerCervezasPorNombre($nombre){

}
    }


?> 