<?php


function saludar()  
 {
    return "Hola  a todos!! ";
 }

 echo saludar();

$resultadoSaludo = saludar();
echo "<br>";
echo "El mendsae es: " .$resultadoSaludo;

function sumar (int $numero1, int $numero2):mixed{
   return $numero1 + $numero2;
}
echo "<br>";
echo "La suma es: " .sumar (numero1:7, numero2:2);




