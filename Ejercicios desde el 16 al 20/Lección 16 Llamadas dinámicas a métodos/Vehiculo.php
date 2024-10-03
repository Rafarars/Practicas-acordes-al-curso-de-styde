<?php
/*
Ejercicio 1: Crea una clase Vehiculo que tenga varios métodos como arrancar, acelerar, y frenar. 
Implementa una función que reciba el nombre del método como parámetro y 
lo invoque de forma dinámica utilizando call_user_func.
*/

class Vehiculo {
    public function arrancar() {
        echo "El vehículo ha arrancado.\n";
    }

    public function acelerar() {
        echo "El vehículo está acelerando.\n";
    }

    public function frenar() {
        echo "El vehículo está frenando.\n";
    }
}

// Función que recibe el nombre del método y lo invoca dinámicamente
function invocarMetodo($objeto, $metodo) {
    if (method_exists($objeto, $metodo)) {
        call_user_func([$objeto, $metodo]); 
    } else {
        echo "El método '$metodo' no existe en la clase " . get_class($objeto) . ".\n";
    }
}

$miVehiculo = new Vehiculo();

// Llamadas dinámicas a los métodos
invocarMetodo($miVehiculo, 'arrancar');
invocarMetodo($miVehiculo, 'acelerar');
invocarMetodo($miVehiculo, 'frenar');

// Intentar invocar un método que no existe
invocarMetodo($miVehiculo, 'volar');
?>
