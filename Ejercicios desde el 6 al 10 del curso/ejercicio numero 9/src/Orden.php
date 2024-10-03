<?php

namespace Practicas\Polimorfismo;

class Orden {
    private $pago;

    // Asignamos el tipo de pago que se usará en la orden
    public function __construct(Pago $pago) {
        $this->pago = $pago;
    }

    // Método para procesar la orden y el pago
    public function procesarOrden() {
        echo "Procesando orden...\n";
        $this->pago->procesarPago();
    }
}

