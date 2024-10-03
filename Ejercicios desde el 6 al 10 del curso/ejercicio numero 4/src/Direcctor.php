<?php

namespace Ejercicio4;

class Direcctor extends Empleado {
    private $bono;
    private $acciones;

    public function __construct($name, $salariobase, $bono, $acciones) {
        parent::__construct($name, $salariobase);
        $this->bono = $bono;
        $this->acciones = $acciones;
    }

    public function calcularSalario() {
        return $this->salariobase + $this->bono + $this->acciones;
    }
}