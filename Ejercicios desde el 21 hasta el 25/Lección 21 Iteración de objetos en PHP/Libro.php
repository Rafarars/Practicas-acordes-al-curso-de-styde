<?php
/*
Ejercicio 1: Crea una clase Libro que tenga propiedades como titulo, autor, y anio. 
Implementa la interfaz Iterator para que puedas iterar sobre las propiedades de la clase. 
Crea un objeto de Libro y usa un foreach para imprimir cada propiedad.
*/

class Libro implements Iterator {
    private $titulo;
    private $autor;
    private $anio;
    private $position = 0;
    private $properties = [];

    public function __construct($titulo, $autor, $anio) {
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->anio = $anio;

        $this->properties = [
            'titulo' => $this->titulo,
            'autor' => $this->autor,
            'anio' => $this->anio
        ];
    }

    // Resetea la posición al inicio
    public function rewind() {
        $this->position = 0;
    }

    // Devuelve el elemento actual
    public function current() {
        $values = array_values($this->properties);
        return $values[$this->position];
    }

    // Devuelve la clave actual
    public function key() {
        $keys = array_keys($this->properties);
        return $keys[$this->position];
    }

    // Avanza a la siguiente posición
    public function next() {
        ++$this->position;
    }

    // Comprueba si la posición actual es válida
    public function valid() {
        return isset(array_values($this->properties)[$this->position]);
    }
}

$libro = new Libro("1984", "George Orwell", 1949);

// Iterar sobre las propiedades del libro usando foreach
foreach ($libro as $key => $value) {
    echo "$key: $value\n";
}
?>
