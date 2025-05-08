<?php

session_start();

class DashBoardController{
    public function cargarView(){
        if(empty($_SESSION["username"])){
            header(
                "Location: login.php"
            );
            return;
        }
        require_once __DIR__."/../Views/dashboard.php";
    }

}
