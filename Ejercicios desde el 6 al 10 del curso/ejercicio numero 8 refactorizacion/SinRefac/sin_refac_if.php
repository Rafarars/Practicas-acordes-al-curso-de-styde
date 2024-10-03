<?php

class Cliente {
    private $nombre;
    private $tipo; // Puede ser "regular", "premium" o "VIP"

    public function __construct($nombre, $tipo) {
        $this->nombre = $nombre;
        $this->tipo = $tipo;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function getTipo() {
        return $this->tipo;
    }

    public function calcularDescuento($montoCompra) {
        $descuento = 0;

        if ($this->tipo == "regular") {
            // Los clientes regulares no tienen descuento
            $descuento = 0;
        } elseif ($this->tipo == "premium") {
            // Descuento del 10% para clientes premium
            $descuento = $montoCompra * 0.10;
        } elseif ($this->tipo == "VIP") {
            // Descuento del 20% para clientes VIP
            $descuento = $montoCompra * 0.20;
        }

        return $descuento;
    }
}

// Función para procesar la compra
function procesarCompra(Cliente $cliente, $montoCompra) {
    $descuento = $cliente->calcularDescuento($montoCompra);
    $totalAPagar = $montoCompra - $descuento;
    
    echo $cliente->getNombre() . " tiene un descuento de: $" . $descuento . "\n";
    echo "Total a pagar: $" . $totalAPagar . "\n";
}

// Crear clientes
$clienteRegular = new Cliente("Juan Regular", "regular");
$clientePremium = new Cliente("Ana Premium", "premium");
$clienteVIP = new Cliente("Carlos VIP", "VIP");

// Monto de compra
$montoCompra = 1000;

// Aplicar descuentos
procesarCompra($clienteRegular, $montoCompra);
procesarCompra($clientePremium, $montoCompra);
procesarCompra($clienteVIP, $montoCompra);
