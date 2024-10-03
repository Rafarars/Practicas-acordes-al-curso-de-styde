<?php
/*
Enunciado: Refactoriza el ejercicio de la clase anterior utilizando una interfaz Trabajador que defina el método calcularSalario. 
Haz que las clases Empleado, Gerente, y Director implementen esta interfaz.
*/
namespace Ejercicio4;

require 'vendor/autoload.php';

use Ejercicio4\Empleado;
use Ejercicio4\Gerente;
use Ejercicio4\Director;

// Crear un empleado
$empleado = new Empleado("Juan", 1000);
echo $empleado->getNombre() . " tiene un salario de: " . $empleado->calcularSalario() . "\n";

// Crear un gerente
$gerente = new Gerente("Ana", 1500, 500); // salario base + bono
echo $gerente->getNombre() . " tiene un salario de: " . $gerente->calcularSalario() . "\n";

// Crear un director
$director = new Direcctor("Carlos", 2000, 1000, 2000); // salario base + bono + acciones
echo $director->getNombre() . " tiene un salario de: " . $director->calcularSalario() . "\n";
