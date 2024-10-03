<?php
/*
Enunciado: Crea una clase Direccion como un Value Object con propiedades como calle, ciudad, y codigoPostal. 
Esta clase debe ser inmutable (una vez creada, sus propiedades no pueden ser modificadas). 
Luego, utiliza esta clase en otra clase Persona para asignar la dirección de una persona.
*/

require 'vendor/autoload.php';

use Ej\Value\Direccion;
use Ej\Value\Persona;

// Crear un objeto Direccion (Value Object)
$direccion = new Direccion("Calle Falsa 123", "Ciudad Ejemplo", "12345");

// Crear un objeto Persona y asignar la dirección
$persona = new Persona("Juan Pérez", $direccion);

// Imprimir los detalles de la persona y su dirección
echo "Nombre: " . $persona->getNombre() . "\n";
echo "Dirección: " . $persona->getDireccion()->getCalle() . ", " . 
    $persona->getDireccion()->getCiudad() . ", " . 
    $persona->getDireccion()->getCodigoPostal() . "\n";