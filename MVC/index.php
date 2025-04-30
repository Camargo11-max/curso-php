<?php

require_once __DIR__ ."/Controllers/CervezasControllers.php";

$controlador = new CervezasController();

$controlador->listaCervezas();