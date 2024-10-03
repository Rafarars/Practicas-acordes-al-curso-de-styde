<?php
/*
Ejercicio 1 (__get): Crea una clase Persona con atributos privados como nombre y edad. 
Implementa el método mágico __get para acceder a estos atributos de forma segura. 
Intenta acceder a ellos desde fuera de la clase utilizando __get.
*/

class Persona {
    private $nombre;
    private $edad;

    public function __construct($nombre, $edad) {
        $this->nombre = $nombre;
        $this->edad = $edad;
    }

    // Método mágico __get para acceder a los atributos privados de manera segura
    public function __get($propiedad) {
        if (property_exists($this, $propiedad)) {
            return $this->$propiedad;
        } else {
            return "Propiedad '$propiedad' no existe.";
        }
    }
}

$persona = new Persona("Juan", 30);

// Intentar acceder a los atributos privados usando el método mágico __get
echo "Nombre: " . $persona->__get("nombre") . "\n"; 
echo "Edad: " . $persona->__get("edad") . "\n";     

// Intentar acceder a un atributo que no existe
echo "Dirección: " . $persona->__get("direccion") . "\n"; 
