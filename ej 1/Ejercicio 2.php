<?php
/*
Ejercicio 2: Encapsulamiento

Objetivo: Aplicar modificadores de acceso private y public.

Descripción: Modifica la clase Coche para que las propiedades sean privadas.
Crea métodos get y set para acceder y modificar los atributos.

Instrucciones:

Cambia las propiedades de Coche a private.
Define métodos getMarca(), getModelo(), getAño() para obtener los valores.
Define métodos setMarca(), setModelo(), setAño() para modificar los valores.
*/

class Coche{
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

$coche1 = new Coche("Toyota", "Corolla", 2020);
$coche1->MostrarInfo();

$coche1->setMarca("Ford");

echo "\nse actualizo la marca a ". $coche1->getMarca();

$coche1->setModelo("Ka");

echo "\nSe actualizo el modelo a: ". $coche1->getModelo();

$coche1->setAño(2012);

echo "\nse actualizo el año a: ". $coche1->getAño();

$coche1->MostrarInfo();
