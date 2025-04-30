<?php

class persona {

    private  string $correo = "";
    private string $telefono = "";

    private string $NMatricula = "";

    public function getCorreo (){
        return $this->correo ;
    }

    public function setCorreo (string $correo ) {
        $this->correo = $correo ;
}

public function getTelefono () : string {   
    return $this->telefono ;
}

public function setTelefono (string $telefono ) {
    $this->telefono = $telefono ;

}

public function getNMatricula () : string {   
    return $this->NMatricula ;
}

public function setNMatricula (string $NMatricula) {
    $this->NMatricula = $NMatricula ;
}

public function presentarse() : void  {
    
    echo "correo: ".$this->getCorreo(). "<br>";
    echo "telefono: " .$this->getTelefono(). "<br>";
    echo "Matricula: ".$this->getNMatricula(). "<br>";   

}


public function presentarse2() : void  {
    
    echo " <br> Correo: ".$this->getCorreo(). "<br>";
    echo "Telefono: " .$this->getTelefono(). "<br>";
    echo "Matricula: ".$this->getNMatricula(). "<br>";   

}

}