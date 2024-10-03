<?php

class Persona{
    private $nombre;
    private $edad;

    public function __construct($nombre, $edad){
        $this->nombre = $nombre;
        $this->edad = $edad;
    }

    public function mostrar(){
        echo "Nombre: $this->nombre, Edad: $this->edad";
    }
}

class estudiante extends Persona{
    Private $carrera;
    Private $semestre;

    public function __construct($nombre, $edad, $carrera, $semestre){
        parent::__construct($nombre,$edad);
        $this->carrera = $carrera;
        $this->semestre = $semestre;
    }
    
    public function mostrar(){
        parent::mostrar();
        echo ", La carrera universitaria es: $this->carrera y el semestre que es cursando es: $this->semestre\n";
    }
}

class profesor extends Persona{
    private $tipodocente;
    
    public function __construct($nombre, $edad, $tipodocente){
        parent::__construct($nombre,$edad);
        $this->tipodocente = $tipodocente;
    }

    public function mostrar(){
        parent::mostrar();
        echo " Y es profesor en: $this->tipodocente\n";
    }
}

class gestionstuden{
    private $estudiantes = [];

    public function agregar($estudiante){
        $this->estudiantes [] = $estudiante;
    }

    public function lista(){
        foreach ($this->estudiantes as $estudiante){
            $estudiante->mostrar();
        }
    }
}

class gestionProfesor{
    private $profesores = [];

    public function agregar($profesor){
        $this->profesores[] = $profesor;
    }

    public function lista(){
        foreach($this->profesores as $profesor){
            $profesor->mostrar();
        }
    }
}


$gestionE = new gestionstuden();

$est1= new estudiante("Rafael", 25, "informatica", "7mo Semestre");
$est2= new estudiante("Petronilo", 20, "Contaduria", "8vo Semestre");

$gestionE->agregar($est1);
$gestionE->agregar($est2);

$gestionE->lista();

$gestionP = new gestionProfesor();

$pro1 = new profesor("Alex", 30, "Quimicas");
$pro2 = new profesor("Petra", 40, "Matematicas");

$gestionP->agregar($pro1);
$gestionP->agregar($pro2);

$gestionP->lista();