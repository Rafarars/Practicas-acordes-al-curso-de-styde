<?php

namespace Patron\Factory;

class Moto implements Vehiculo {
    public function conducir() {
        echo "Conduciendo una moto\n";
    }
}