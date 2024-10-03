<?php
/*
Ejercicio 2: Crea una clase Vehiculo que tenga propiedades como marca, modelo, y anio. 
Implementa la lógica necesaria para comparar si dos vehículos son iguales 
(por ejemplo, si tienen la misma marca y modelo) y usa este método en un ejemplo.
*/

class Vehiculo {
    private $marca;
    private $modelo;
    private $anio;

    public function __construct($marca, $modelo, $anio) {
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->anio = $anio;
    }

    public function esIgual(Vehiculo $otroVehiculo) {
        return $this->marca == $otroVehiculo->marca && $this->modelo == $otroVehiculo->modelo;
    }

    // Método __toString para mostrar la información del vehículo
    public function __toString() {
        return "Marca: " . $this->marca . ", Modelo: " . $this->modelo . ", Año: " . $this->anio;
    }
}

// Crear dos objetos Vehiculo
$vehiculo1 = new Vehiculo("Toyota", "Corolla", 2020);
$vehiculo2 = new Vehiculo("Toyota", "Corolla", 2021);
$vehiculo3 = new Vehiculo("Honda", "Civic", 2020);

// Mostrar los vehículos
echo $vehiculo1 . "\n";  
echo $vehiculo2 . "\n";  
echo $vehiculo3 . "\n"; 

// Comparar vehículos
if ($vehiculo1->esIgual($vehiculo2)) {
    echo "Vehículo 1 y Vehículo 2 son iguales (misma marca y modelo).\n";
} else {
    echo "Vehículo 1 y Vehículo 2 NO son iguales.\n";
}

if ($vehiculo1->esIgual($vehiculo3)) {
    echo "Vehículo 1 y Vehículo 3 son iguales (misma marca y modelo).\n";
} else {
    echo "Vehículo 1 y Vehículo 3 NO son iguales.\n";
}
?>
