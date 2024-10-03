<?php

namespace Ej8\Refactorizacion;

abstract class Cliente {
    protected $nombre;

    public function __construct($nombre) {
        $this->nombre = $nombre;
    }

    // Método abstracto para calcular el descuento
    abstract public function calcularDescuento($montoCompra);
    
    public function getNombre() {
        return $this->nombre;
    }
}
