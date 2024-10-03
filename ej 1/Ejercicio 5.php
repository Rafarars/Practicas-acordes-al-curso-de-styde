<?php 
/*
Ejercicio 5: Aplicación de Gestión

Objetivo: Crear un pequeño sistema de gestión usando POO.

Descripción: Crea un sistema de gestión de estudiantes. 
La clase Estudiante debe tener atributos como nombre, edad, curso. 
Implementa métodos para registrar, mostrar y listar los estudiantes.

Instrucciones:

Define la clase Estudiante con los atributos mencionados.
Implementa un método registrar() para registrar un nuevo estudiante.
Implementa un método mostrar() para mostrar la información de un estudiante.
Crea una clase GestorEstudiantes para manejar una lista de estudiantes y agregar nuevos.
*/

class Estudiante{
    private $nombre;
    private $edad;
    private $curso;

    public function __construct($nombre,$edad,$curso){
        $this->nombre = $nombre;
        $this->edad = $edad;
        $this->curso = $curso;
    }

    public function Mostrar(){
        echo "\nNombre: $this->nombre, Edad: $this->edad y Curso: $this->curso";
    }
}

class GestorEstudiantes{
    private $listaestudiante = [];


    public function registrar($estudiante){
        $this->listaestudiante[] = $estudiante;
    }

    public function lista(){
        foreach ($this->listaestudiante as $estudiante){
            $estudiante->Mostrar();
        }
    }
}

$gestor = new GestorEstudiantes();

$est1 = new Estudiante("Rafael", 25, "Ingles");
$est2 = new Estudiante("Rafaelasdas", 2225, "Inglesdasds");
$gestor->registrar($est1);
$gestor->registrar($est2);

$gestor->lista();