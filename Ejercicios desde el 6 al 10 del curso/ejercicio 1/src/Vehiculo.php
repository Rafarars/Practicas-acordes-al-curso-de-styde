<?php

class Vehiculo {
    private $motor;
    private $ruedas;

    public function __construct(Motor $motor, Rueda $rueda) {
        $this->motor = $motor;
        $this->ruedas = [$rueda, $rueda, $rueda, $rueda];  
    }

    public function arrancar() {
        echo "Arrancando el vehículo...\n";
        $this->motor->encender();
    }

    public function obtenerEstado() {
        return "El vehículo tiene " . count($this->ruedas) . " ruedas y un motor.\n";
    }

    public function inflarRuedas() {
        echo "Inflando las ruedas...\n";
        foreach ($this->ruedas as $rueda) {
            $rueda->inflar(); 
        }
    }
}