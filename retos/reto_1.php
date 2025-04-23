<?php

$edad =29;
$altura = 1.60;
$resultadoSuma;

echo "la edad es" .$edad. "y la altura es: " .$altura;
$resultadoSuma = $edad + $altura;
echo "<br>";
echo "<br> El resultado de la suma es: " ,$resultadoSuma;

$resultadoResta = $edad - $altura;
echo "<br>";
echo "<br> El resultado de la Resta es: " .$resultadoResta;

$resultadoMultiplicacion = $edad * $altura;
echo "<br>";
echo "<br> El resultado de la Multiplicaciones: " ,$resultadoMultiplicacion;

$resultadoDivision = $edad / $altura;
echo "<br>";
echo "<br> El resultado de la División es: " ,$resultadoDivision;

$resultadoPotencia = $edad ** $altura;
echo "<br>";
echo "<br> El resultado de la Potencia es: " ,$resultadoPotencia;

$raizCuadrada = sqrt($resultadoSuma);
echo "<br>";
echo "<br> La raiz cuadrada de: ,$resultadoSuma es $raizCuadrada";

?>