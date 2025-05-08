<?php

session_start();

require_once __DIR__ ."/../Models/Usuario.php";

class LoginController {

    public function cargarView(){

        require_once __DIR__ ."/../Views/login.php";
    }
    public function autenticarUsusario($dataAcceso){

        $usuario = $this->getUsuario();
        if(isset($dataAcceso["username"]) && isset($dataAcceso["password"])){
            $usuario = $this->getUsuario();
            if ($usuario->getUsername() === $dataAcceso["username"]){
                if ($usuario->getPassword() === $dataAcceso["password"]){
                    $_SESSION["username"] = $usuario->getUsername();
                    $_SESSION["username_lastname"] = $usuario->getNombre();
                    header("Location: dashboard.php");

                }else{
                    echo "El Password del usuario es Incorrecto";
                }
            }else{
                echo "El usuario NO existe";
            }
        }else{
            echo "No se envio Información";
        }
        }  

private function getUsuario(){

    $usuarioExistente = new Usuario(
        "paco",
        "12345",
        "Castro Diaz"
    );
    return $usuarioExistente;
}


    }

    
