<?php

namespace Ej\Value;

class Persona {
    private $nombre;
    private $direccion;
    
    public function __construct($nombre, Direccion $direccion) {
        $this->nombre = $nombre;
        $this->direccion = $direccion;
    }

    // Método para obtener el nombre
    public function getNombre() {
        return $this->nombre;
    }

    // Método para obtener la dirección
    public function getDireccion() {
        return $this->direccion;
    }
}
