<?php

namespace Practicas\Polimorfismo;

class PagoPayPal extends Pago {
    private $email;

    public function __construct($monto, $email) {
        parent::__construct($monto);
        $this->email = $email;
    }

    public function procesarPago() {
        echo "Procesando pago de $this->monto a través de PayPal.\n";
        echo "Email del usuario de PayPal: $this->email.\n";
    }
}

