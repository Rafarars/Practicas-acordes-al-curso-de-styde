<?php
/*
Enunciado: Crea una clase abstracta Figura con un método abstracto calcularArea. 
Crea clases que hereden de Figura como Rectangulo y Circulo, cada una con su propio cálculo de área. 
Implementa el cálculo de área en las clases derivadas.
*/

abstract class Figura{
    abstract public function calcularArea();
}

class rectangulo extends Figura{
    private $ancho;
    private $largo;

    public function __construct($ancho,$largo){
        $this->ancho = $ancho;
        $this->largo = $largo;
    }

    public function calcularArea(){
        return $this->ancho * $this->largo;
    }
}

class circulo extends Figura{
    private $radio;

    public function __construct($radio){
        $this->radio = $radio;
    }

    public function calcularArea(){
        return pi() * pow($this->radio,2);
    }
}

$rec1 = new rectangulo(10, 20);

echo $rec1->calcularArea(), "\n";

$circ = new circulo(10);

echo $circ->calcularArea();