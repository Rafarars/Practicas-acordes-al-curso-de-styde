<?php

namespace Practicas\Polimorfismo;

class PagoEfectivo extends Pago {

    public function __construct($monto) {
        parent::__construct($monto);
    }

    public function procesarPago() {
        echo "Procesando pago de $this->monto en efectivo.\n";
    }
}

