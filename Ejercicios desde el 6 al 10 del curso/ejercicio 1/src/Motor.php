<?php
class Motor {
    private $estado;

    public function __construct() {
        $this->estado = false;
    }

    public function encender() {
        if (!$this->estado) {
            $this->estado = true;
            echo "Motor encendido.\n";
        } else {
            echo "El motor ya está encendido.\n";
        }
    }

    public function apagar() {
        if ($this->estado) {
            $this->estado = false;
            echo "Motor apagado.\n";
        } else {
            echo "El motor ya está apagado.\n";
        }
    }
}