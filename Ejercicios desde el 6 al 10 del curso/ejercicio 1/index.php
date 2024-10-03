<?php
/*
Enunciado: Organiza un proyecto que contenga las clases Vehiculo, Motor, y Rueda en diferentes archivos dentro de una carpeta llamada src. 
Luego, implementa la autocarga de estas clases utilizando la función spl_autoload_register. 
Crea un archivo principal para instanciar un objeto Vehiculo y acceder a sus métodos.
*/

spl_autoload_register(function ($class_name) {
    include __DIR__ . '/src/' . $class_name . '.php';
});


$motor = new Motor();
$rueda = new Rueda();
$vehiculo = new Vehiculo($motor, $rueda);


echo $vehiculo->obtenerEstado();
$vehiculo->arrancar();
$vehiculo->inflarRuedas();