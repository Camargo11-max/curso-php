<?php

/* while 
se ejecuta de forma infinita, a menos de que no se 
cumpla una condicion o la condicion que tiene el propio ciclo
*/

$monedero = 3200;// creamos la variable con el valor del monedero 
$preciocerveza = 500;
$contadorCervezaCompradas =0; // se establece cuantas cervezas hemos comprado

while ($monedero >= $preciocerveza){ //declaramos que solo se ejecute si en el monedero tenemos mas que el precio de la cerveza 
$contadorCervezaCompradas++; // se compra una cerveza
$monedero -= $preciocerveza; // se resta al monedero el valor de cerveza
echo $contadorCervezaCompradas. "<br>";
}

echo "Mi monedero: " .$monedero. "<br>";
echo "Total cervezas Compradas: " .$contadorCervezaCompradas;

/* Do while */


$monedero = 0; 
$precioCerveza = 500;
$contadorCervezaCompradas = 0;


do {
    $contadorCervezaCompradas++;
    $monedero = $monedero - $precioCerveza;
} while ($monedero >= $precioCerveza);

echo "Mi monedero: " .$monedero. "<br>";
echo "Total cervezas Compradas: " .$contadorCervezaCompradas;

?>