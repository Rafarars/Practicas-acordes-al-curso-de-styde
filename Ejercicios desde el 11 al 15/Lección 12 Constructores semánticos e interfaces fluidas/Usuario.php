<?php
/*
Ejercicio 1: Crea una clase Usuario con un constructor semántico. 
El constructor debe recibir un nombre y devolver una nueva instancia de la clase. 
Implementa métodos que sigan una interfaz fluida, es decir, 
que permitan encadenar llamadas a métodos como $usuario->setNombre()->setEdad().
*/

class Usuario {
    private $nombre;
    private $edad;

    // Constructor semántico para crear una nueva instancia
    public static function crear($nombre) {
        $usuario = new self();
        $usuario->nombre = $nombre;
        return $usuario;
    }

    // Método fluido para establecer el nombre
    public function setNombre($nombre) {
        $this->nombre = $nombre;
        return $this; 
    }

    // Método fluido para establecer la edad
    public function setEdad($edad) {
        $this->edad = $edad;
        return $this; 
    }

    public function mostrar() {
        echo "Nombre: " . $this->nombre . "\n";
        echo "Edad: " . $this->edad . "\n";
    }
}

// Uso de la clase con el constructor semántico e interfaz fluida

$usuario = Usuario::crear("Carlos")   
            ->setEdad(25)             
            ->setNombre("Carlos R.");  

$usuario->mostrar();
