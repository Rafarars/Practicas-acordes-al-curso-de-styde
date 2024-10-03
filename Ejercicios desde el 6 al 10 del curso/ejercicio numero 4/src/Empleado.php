<?php

namespace Ejercicio4;

class Empleado {
    protected $name;  // Cambiado a protected
    protected $salariobase;  // Cambiado a protected

    public function __construct($name, $salariobase) {
        $this->name = $name;
        $this->salariobase = $salariobase;
    }

    public function getNombre() {  // Cambié getName por getNombre para coincidir con el index
        return $this->name;
    }

    public function getSalario() {
        return $this->salariobase;
    }

    public function calcularSalario() {
        return $this->salariobase;  // Ahora devuelve el salario base
    }
}