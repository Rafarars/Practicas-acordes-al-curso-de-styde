<?php

namespace Ej\Value;

class Direccion {
    private $calle;
    private $ciudad;
    private $codigoPostal;

    // Constructor que asigna los valores de la dirección
    public function __construct($calle, $ciudad, $codigoPostal) {
        $this->calle = $calle;
        $this->ciudad = $ciudad;
        $this->codigoPostal = $codigoPostal;
    }

    // Métodos "getter" para obtener los valores, pero sin "setter"
    public function getCalle() {
        return $this->calle;
    }

    public function getCiudad() {
        return $this->ciudad;
    }

    public function getCodigoPostal() {
        return $this->codigoPostal;
    }
}