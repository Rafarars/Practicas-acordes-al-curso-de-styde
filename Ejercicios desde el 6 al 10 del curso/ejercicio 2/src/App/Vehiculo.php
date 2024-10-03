<?php 

namespace App;

class Vehiculo{


    public function __construct() {
        echo "Vehiculo creado desde el namespace App\n";
    }

    public function conducir(){
        echo "Conduciendo el vehiculo desde el namespace App\n";
    }
}