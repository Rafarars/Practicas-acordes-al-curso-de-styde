<?php

namespace Ejercicio4;

class Empleado implements Trabajador {
    protected $name;  
    protected $salariobase;  

    public function __construct($name, $salariobase) {
        $this->name = $name;
        $this->salariobase = $salariobase;
    }

    public function getNombre() {  
        return $this->name;
    }

    public function calcularSalario() {
        return $this->salariobase;  
    }
}