<?php

namespace Ej8\Refactorizacion;

class ClientePremium extends Cliente {
    public function calcularDescuento($montoCompra) {
        // Descuento del 10% para clientes premium
        return $montoCompra * 0.10;
    }
}
