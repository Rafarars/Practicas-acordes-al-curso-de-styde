<?php

namespace Vendor;

class Vehiculo {
    public function __construct() {
        echo "Vehículo creado desde el namespace Vendor\n";
    }

    public function conducir() {
        echo "Conduciendo vehículo del namespace Vendor\n";
    }
}