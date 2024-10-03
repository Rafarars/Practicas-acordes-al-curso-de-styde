<?php
/*
Enunciado: Crea un archivo PHP que use namespace para organizar dos clases con el mismo nombre en diferentes espacios de nombres, 
por ejemplo, App\Vehiculo y Vendor\Vehiculo. Crea una instancia de cada clase utilizando la palabra clave use.
*/

// Autocargador para incluir las clases desde src
spl_autoload_register(function ($class_name) {
    $class_name = str_replace("\\", DIRECTORY_SEPARATOR, $class_name);
    include __DIR__ . '/src/' . $class_name . '.php';
});

// Usar las clases Vehiculo de diferentes namespaces
use App\Vehiculo as AppVehiculo;
use Vendor\Vehiculo as VendorVehiculo;

// Crear una instancia de la clase Vehiculo en el namespace App
$vehiculoApp = new AppVehiculo();
$vehiculoApp->conducir();

// Crear una instancia de la clase Vehiculo en el namespace Vendor
$vehiculoVendor = new VendorVehiculo();
$vehiculoVendor->conducir();