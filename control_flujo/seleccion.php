<?php

/* If */

$valorcerveza = 5000;
$miMonedero = 1000;

if ($valorcerveza < $miMonedero) {
    echo "No puedo comprar cerveza";
}  

$elBancoMePresta = true;

/* If operadores Logicos */

if($valorcerveza < $miMonedero || $elBancoMePresta) {
    echo "puedo Comprar Cerveza";
}

/* Else operadores Logicos */

if($valorcerveza < $miMonedero && $elBancoMePresta){
    echo "Puedo comprar Cerveza";
} else{
    echo"No tengo dinero para comprar cerveza";
}

/* Else, If*/

$estaMiAmigo = true;

if ($valorcerveza < $miMonedero && $elBancoMePresta) {
    echo "Puedo comprar cerveza";
}else if ($estaMiAmigo){ 
echo "Mi amigo compra la Cerveza";
}else {
    echo "No tengo dinero para comprar cerveza";
}

/* swich */

$nombreCerveza = "Aguila";
switch ($nombreCerveza) {
    case "Poker":
        echo "Esa cerveza no me gusta";
        break;
        case "Aguila":
            echo "No me desagrada esa cerveza";
            break;  
            case "Club Colombia":
                echo "Esa cerveza me gusta";
                break;
                default:
                echo "No se de cervezas";
                break;
}

?>