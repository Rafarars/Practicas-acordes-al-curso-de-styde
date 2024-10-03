<?php
/*
Ejercicio 2 (__callStatic): Extiende la clase anterior para que también implemente 
el método mágico __callStatic. Prueba el comportamiento llamando a métodos 
estáticos que no existen.
*/

class Empleado {
    private $nombre;
    private $puesto;

    public function __construct($nombre, $puesto) {
        $this->nombre = $nombre;
        $this->puesto = $puesto;
    }

    // Método mágico __call para manejar métodos inexistentes de instancias
    public function __call($name, $arguments) {
        echo "El método de instancia '$name' no está definido en la clase " . __CLASS__ . ".\n";
        if (!empty($arguments)) {
            echo "Se pasaron los siguientes argumentos: " . implode(', ', $arguments) . ".\n";
        }
    }

    // Método mágico __callStatic para manejar métodos inexistentes estáticos
    public static function __callStatic($name, $arguments) {
        echo "El método estático '$name' no está definido en la clase " . __CLASS__ . ".\n";
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

// Llamar a un método inexistente en la instancia
$empleado->calcularSalario(40, 15);

// Llamar a un método inexistente estático
Empleado::crearEmpleado("Pedro", "Diseñador");

Empleado::borrarEmpleado(5);
?>
