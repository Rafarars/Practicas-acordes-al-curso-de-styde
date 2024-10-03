<?php

require 'vendor/autoload.php';

use Ej8\Refactorizacion\Cliente;
use Ej8\Refactorizacion\ClienteRegular;
use Ej8\Refactorizacion\ClientePremium;
use Ej8\Refactorizacion\ClienteVIP;


// Función para procesar la compra y calcular el descuento
function procesarCompra(Cliente $cliente, $montoCompra) {
    $descuento = $cliente->calcularDescuento($montoCompra);
    $totalAPagar = $montoCompra - $descuento;
    
    echo $cliente->getNombre() . " tiene un descuento de: $" . $descuento . "\n";
    echo "Total a pagar: $" . $totalAPagar . "\n";
}

// Crear clientes
$clienteRegular = new ClienteRegular("Juan Regular");
$clientePremium = new ClientePremium("Ana Premium");
$clienteVIP = new ClienteVIP("Carlos VIP");

// Monto de compra
$montoCompra = 1000;

// Aplicar descuentos
procesarCompra($clienteRegular, $montoCompra);
procesarCompra($clientePremium, $montoCompra);
procesarCompra($clienteVIP, $montoCompra);

