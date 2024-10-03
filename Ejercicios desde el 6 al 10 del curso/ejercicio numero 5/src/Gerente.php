<?php

namespace Ejercicio4;

class Gerente extends Empleado {
    private $bono;

    public function __construct($name, $salariobase, $bono) {
        parent::__construct($name, $salariobase);
        $this->bono = $bono;
    }

    public function calcularSalario() {
        return $this->salariobase + $this->bono;
    }
}