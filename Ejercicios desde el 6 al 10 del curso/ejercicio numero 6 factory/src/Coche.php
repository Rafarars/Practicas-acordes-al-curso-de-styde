<?php

namespace Patron\Factory;

class Coche implements Vehiculo{
    public function conducir(){
        echo "Canduciendo un coche\n";
    }
}