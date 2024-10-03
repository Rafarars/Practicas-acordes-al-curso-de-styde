<?php
/*
Ejercicio 1 (__call): Crea una clase Empleado que implemente el método mágico __call. 
Si se llama a un método que no existe, el método __call debe imprimir un mensaje 
indicando que el método no está definido.
*/

class Empleado {
    private $nombre;
    private $puesto;

    public function __construct($nombre, $puesto) {
        $this->nombre = $nombre;
        $this->puesto = $puesto;
    }

    // Método mágico __call para manejar métodos inexistentes
    public function __call($name, $arguments) {
        echo "El método '$name' no está definido en la clase " . __CLASS__ . ".\n";
        if (!empty($arguments)) {
            echo "Se pasaron los siguientes argumentos: " . implode(', ', $arguments) . ".\n";
        }
    }

    public function mostrarNombre() {
        echo "El nombre del empleado es: {$this->nombre}\n";
    }

    public function mostrarPuesto() {
        echo "El puesto del empleado es: {$this->puesto}\n";
    }
}

$empleado = new Empleado("Juan", "Desarrollador");

// Llamar a un método existente
$empleado->mostrarNombre();
$empleado->mostrarPuesto();

// Llamar a un método inexistente
$empleado->calcularSalario(40, 15);

$empleado->vacaciones();
?>
