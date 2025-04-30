<?php

class Estudiante extends Persona{

    private $nMatricula;


    public function getMatricular() {
        return $this->nMatricula;
}

public function setMatricular($nMatricula) {
    $this->nMatricula = $nMatricula;

    return $this;
}

}




