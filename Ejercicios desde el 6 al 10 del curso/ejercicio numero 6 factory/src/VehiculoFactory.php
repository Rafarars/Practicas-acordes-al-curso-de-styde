<?php

namespace Patron\Factory;

class VehiculoFactory {

    public static function crearVehiculo($tipo) {
        switch (strtolower($tipo)) {
            case 'coche':
                return new Coche();
            case 'moto':
                return new Moto();
            case 'bicicleta':
                return new Bicicleta();
            default:
                throw new \Exception("Tipo de vehículo no soportado");
        }
    }
}