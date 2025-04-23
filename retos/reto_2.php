<?php

$edad =20;
$altura =1.75;
$es_mayor_edad = $edad >= 18;
$es_alto = $altura >= 1.75;

echo "valor variable es_mayor_edad: " .$es_mayor_edad;

echo "<br>";
if( $es_mayor_edad){
    echo "Es Mayor de edad";
}else {
    echo "Es menor de edad";
}

echo "<br><h2>Negacion</br></h2> ";

$negacionEdad = !$es_mayor_edad;

if( $negacionEdad){
    echo "Es Mayor de edad";
}else {
    echo "No es menor de edad";
}

echo "<br><h2>Conjuncicion o AND (&&) </br></h2> ";

$conjuncionResultado =$es_mayor_edad && $es_alto;
echo "El valor de la conjuncion es: " .$conjuncionResultado;

echo "<br><h2>Disyuncicion o OR (||) </br></h2> ";


$disyuncionResultado =$es_mayor_edad || $es_alto;
echo "El valor de la conjuncion es: " .$disyuncionResultado;









?>