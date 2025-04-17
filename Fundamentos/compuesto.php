<?php

/* Arrays con valores String*/

$tipoDeCervezas = ['Lager', 'Negra', 'Abadia','Alemana'];
echo "<br> array simple <br>";
var_dump($tipoDeCervezas);
echo "<br>";

var_dump($tipoDeCervezas[1]); 

/*Array con valores int */

$tiposCervezasconValor = [
    "Lager" => 2500,
    "Negra"=> 3000,
    "Abadia"=> 4500,
];
 
var_dump($tiposCervezasconValor);


