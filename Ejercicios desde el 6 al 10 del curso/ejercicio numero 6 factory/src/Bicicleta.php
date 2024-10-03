<?php

namespace Patron\Factory;

class Bicicleta implements Vehiculo {
    public function conducir() {
        echo "Montando una bicicleta\n";
    }
}