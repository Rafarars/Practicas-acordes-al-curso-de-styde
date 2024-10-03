<?php

namespace Practicas\Polimorfismo;

class PagoTarjeta extends Pago {
    private $numeroTarjeta;
    private $nombreTitular;

    public function __construct($monto, $numeroTarjeta, $nombreTitular) {
        parent::__construct($monto);
        $this->numeroTarjeta = $numeroTarjeta;
        $this->nombreTitular = $nombreTitular;
    }

    public function procesarPago() {
        echo "Procesando pago de $this->monto con tarjeta.\n";
        echo "Número de tarjeta: $this->numeroTarjeta, Titular: $this->nombreTitular.\n";
    }
}

