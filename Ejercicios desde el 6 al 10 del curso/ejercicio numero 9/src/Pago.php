<?php

namespace Practicas\Polimorfismo;

abstract class Pago {
    protected $monto;

    public function __construct($monto) {
        $this->monto = $monto;
    }

    // Método abstracto que cada clase concreta debe implementar
    abstract public function procesarPago();
}

