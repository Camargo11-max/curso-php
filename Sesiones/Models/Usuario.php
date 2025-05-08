<?php

class Usuario{

    private $username;
    private $password;
    private $nombre;


    public function __construct($username, $password, $nombre){

        $this->username = $username;
        $this->password = $password;
        $this->nombre =$nombre;
    }
    public function getUsername(){
        return $this->username;
    }
    public function getPassword(){
        return $this->password;
    }
    public function getNombre(){
        return $this->nombre;
    }

}

