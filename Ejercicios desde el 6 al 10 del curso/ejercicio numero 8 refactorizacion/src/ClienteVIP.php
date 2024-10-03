<?php

namespace Ej8\Refactorizacion;

class ClienteVIP extends Cliente {
    public function calcularDescuento($montoCompra) {
        // Descuento del 20% para clientes VIP
        return $montoCompra * 0.20;
    }
}
