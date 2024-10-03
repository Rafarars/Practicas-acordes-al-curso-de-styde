<?php
/*
Ejercicio 3: Herencia

Objetivo: Utilizar la herencia para crear una jerarquía de clases.

Descripción: Crea una clase base Vehiculo con las propiedades comunes a todos los vehículos 
(marca, modelo, año). Luego, crea una clase Moto que herede de Vehiculo y 
añade un atributo adicional llamado tipoMotor.

Instrucciones:

Define la clase Vehiculo con sus propiedades y métodos.
Crea la clase Moto que herede de Vehiculo e implemente el atributo tipoMotor.
Instancia objetos de Moto y usa métodos heredados.
*/

class vehiculo{
    private $marca;
    private $modelo;
    private $año;

    public function __construct($marca,$modelo,$año){
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->año = $año;
    }

    public function getMarca(){
        return $this->marca;
    }

    public function setMarca($marca){
        $this->marca = $marca;
    }


    public function MostrarInfo(){
        echo "\nCoche: $this->marca, $this->modelo, Año: $this->año ";
    }

    public function getModelo(){
       return $this->modelo;
    }

    public function setModelo($modelo){
        $this->modelo = $modelo;
    }

    public function getAño(){
        return $this->año;
    }

    public function setAño($año){
        $this->año = $año;
    }
}

class moto extends vehiculo {
    private $tipomotor;

    public function __construct($marca,$modelo,$año,$tipomotor){
        parent::__construct($marca,$modelo,$año);
        $this->tipomotor = $tipomotor;
    }

    public function MostrarInfo(){
        parent::MostrarInfo();
        echo "\n El tipo de motor es: $this->tipomotor";
    }

}


$moto1 = new moto("Yamaha", "DT", 2024, "200cc");
$moto1->MostrarInfo();



