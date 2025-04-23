<?php

/* Operadores aritmeticos */

echo"******** OPERADORES ARIRMETICOS ******** <br>";

$valorCerveza = 500;
$numeroDeCerveza = 2;

$adicion = $valorCerveza + $numeroDeCerveza;
$sustracion = $valorCerveza - $numeroDeCerveza;  
$multiplicacion = $valorCerveza * $numeroDeCerveza;
$division = $valorCerveza / $numeroDeCerveza;

/* resta o residuo */
$modulo = $valorCerveza % $numeroDeCerveza;

/* Modulo 15 % 2 ; */

$exponenciacion = $valorCerveza ** $numeroDeCerveza;

echo "<table border='2'>";
echo "<tr><th>Operación</th><th>Resultado</th></tr>";

echo "<tr><td>Adición</td><td>" .$adicion. "</td></tr>";
echo "<tr><td>sustracción</td><td>" .$sustracion. "</td></tr>";
echo "<tr><td>Multiplicación</td><td>" .$multiplicacion. "</td></tr>";
echo "<tr><td>División</td><td>" .$division. "</td></tr>";
echo "<tr><td>Modulo</td><td>" .$modulo. "</td></tr>";
echo "<tr><td>Exponenciación</td><td>" .$exponenciacion. "</td></tr>";
echo "</table>";



$valorCervezaColombiana = "2";

$valorCervezaMexico = 2;

$igual = $valorCervezaMexico == $valorCervezaColombiana;

echo "<br><br>Igual: <br>";
var_dump($igual);

$identico = $valorCervezaColombiana === $valorCervezaMexico;
echo "<br><br>Identico: <br>";
var_dump($identico);

$noidentico = $valorCervezaMexico !== $valorCervezaColombiana;
echo "<br><br>No Identico: <br>";
var_dump($noidentico);

$diferente = $valorCervezaMexico != $valorCervezaColombiana;
echo "<br><br>diferente: <br>";
var_dump($diferente);

$menorQue = $valorCervezaColombiana < $valorCervezaMexico;
echo "<br><br>menor Que: <br>";
var_dump($menorQue);

$mayorQue = $valorCervezaColombiana > $valorCervezaMexico;
echo "<br><br>mayor Que: <br>";
var_dump($mayorQue);

$menorIgualQue = $valorCervezaColombiana <= $valorCervezaMexico;
echo "<br><br>menor igual Que: <br>";
var_dump($menorIgualQue);

$mayorIgualQue = $valorCervezaColombiana >= $valorCervezaMexico;
echo "<br><br>mayor igual Que: <br>";
var_dump($mayorIgualQue);


?>