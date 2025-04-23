<?php

/*Funciones con parametros */

function saludar ($parametro,$parametro2){
    echo "Hola Mundo " .$parametro. " " .$parametro2;
}
$nombre ="Juan";
$resultado = saludar ($nombre, "Diaz");

/*Funciones con retorno */

function numeros ($parametro, $parametro2){
    $opreacion =$parametro + $parametro2;
    echo "<br>";
    echo "operacion dentro: ".$opreacion;
    return $opreacion;
}
$resultado = numeros (2,4);
echo "<br>";
echo "resultado: ", $resultado;

/* Reemplazar caracteres */

echo "<br>";
$frase =" Hola mundo me gusta la carne";
echo " frase: <br>";
echo $frase;

echo "<br>";
$fraseMo = str_replace("mundo", "tierra", $frase);
echo $fraseMo;

echo "<br>";
echo date ("Y-m-d");

?>
