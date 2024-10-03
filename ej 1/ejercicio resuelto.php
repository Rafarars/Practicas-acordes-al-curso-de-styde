<?php
class Estudiante {
    public $nombre;
    public $edad;
    public $curso;

    public function __construct($nombre, $edad, $curso) {
        $this->nombre = $nombre;
        $this->edad = $edad;
        $this->curso = $curso;
    }

    public function mostrar() {
        echo "Nombre: $this->nombre, Edad: $this->edad, Curso: $this->curso\n";
    }
}

class GestorEstudiantes {
    private $estudiantes = [];

    public function agregarEstudiante($estudiante) {
        $this->estudiantes[] = $estudiante;
    }

    public function listarEstudiantes() {
        foreach ($this->estudiantes as $estudiante) {
            $estudiante->mostrar();
        }
    }
}

$gestor = new GestorEstudiantes();
$est1 = new Estudiante("Juan", 20, "Matemáticas");
$est2 = new Estudiante("María", 22, "Biología");

$gestor->agregarEstudiante($est1);
$gestor->agregarEstudiante($est2);

$gestor->listarEstudiantes();
?>