<?php

namespace Ej8\Refactorizacion;

class ClienteRegular extends Cliente {
    public function calcularDescuento($montoCompra) {
        // Los clientes regulares no tienen descuento
        return 0;
    }
}
