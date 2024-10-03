<?php
/*
Enunciado: Implementa un patrón Factory para crear objetos de diferentes tipos de Vehiculo. 
Debes tener una clase VehiculoFactory que retorne instancias de Coche, 
Moto, o Bicicleta dependiendo del tipo de vehículo solicitado.
*/

require 'vendor/autoload.php';

use Patron\Factory\VehiculoFactory;

try {
    // Crear un coche
    $coche = VehiculoFactory::crearVehiculo('coche');
    $coche->conducir();  

    // Crear una moto
    $moto = VehiculoFactory::crearVehiculo('moto');
    $moto->conducir();  

    // Crear una bicicleta
    $bicicleta = VehiculoFactory::crearVehiculo('bicicleta');
    $bicicleta->conducir();  

} catch (Exception $e) {
    echo 'Error: ' . $e->getMessage();
}
