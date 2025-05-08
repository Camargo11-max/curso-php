<?php

$a =true;
$b =false;

echo "A: TRUE";  
echo "<br>";
echo "B: FALSE";
echo "<br>";
echo "<br>";

$comparacionAndPalabra = ($a and $b);
$comparacionAndSimbolo = $a && $b;

echo "<br>";
echo  "<br> comparacion AND (palabra); </b>";
echo "<br>";
var_dump($comparacionAndPalabra);
echo "<br>";

echo  "<br> comparacion AND (simbolo); </b>";
echo "<br>";
var_dump($comparacionAndSimbolo);
echo "<br>";

$comparacionOrPalabra = ($a or $b);
$comparacionOrSimbolo = $a || $b;

echo "<br>";
echo  "<br> comparacion OR (palabra); </b>";
echo "<br>";
var_dump($comparacionOrPalabra);
echo "<br>";

echo  "<br> comparacion OR (simbolo); </b>";
echo "<br>";
var_dump($comparacionOrSimbolo);
echo "<br>";

$comparacionXor = $a xor $b;
echo "<br> Comparacion XOR <br>";
echo "<br>";
var_dump($comparacionXor);
echo "<br>";    
echo "<br>";
$comparacionXor = ($b xor $a);
echo "<br>";
var_dump($comparacionXor);
echo "<br>";
echo "<br>";

$negacionA = !$a;

echo "<br>Comparacion NOT: <br>";
echo "<br>";    
var_dump($negacionA);
echo "<br>";
echo "<br>";

?>





