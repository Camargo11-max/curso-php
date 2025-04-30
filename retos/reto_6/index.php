<?php

include("Persona.php");
include("Estudiante.php");


$persona = new Persona();
$persona->setCorreo("@Ejemplocorreo"); 
$persona->setTelefono("(061)8654211");
$persona->setnMatricula("55555666666s");
$persona->presentarse("");

$estudiante = new Persona();
$persona->setCorreo("Jorge_Rodriguez@Ejemplocorreo");
$persona->setTelefono("3023948163");
$persona->setnMatricula("98436365");
$persona->presentarse2("");