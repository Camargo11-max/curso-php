<?php

/* Estructura de <Iteración */

echo "Ejemplo: ";

for ($i = 0; $i <=10; $i++) {
    echo $i ."<br>";
}

/* For each */

$precioCervezas =[2500,1500,1000,3000];

echo"Ejemplo 1: <br>";
foreach( $precioCervezas as $precioCervezas ) {
    echo "$" .$precioCervezas. "<br>";
}



$cervezasConPrecios =[
    "Lagers" => 1500,
    "Oscura"=> 3000,
    "Club Colombia"=> 6000,
    "Corona"=> 6500,
    "Ales"=> 4500
];

echo"Ejemplo 2: <br>";
foreach ($cervezasConPrecios as $keyNombreCervezas => $valuePrecio) {
echo $keyNombreCervezas." $".$valuePrecio. "<br>";
}

?>

