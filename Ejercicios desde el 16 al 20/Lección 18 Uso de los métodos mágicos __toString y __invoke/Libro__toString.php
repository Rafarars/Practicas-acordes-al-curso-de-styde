<?php
/*
Ejercicio 1 (__toString): Crea una clase Libro que tenga propiedades como titulo y 
autor. Implementa el método mágico __toString para que cuando se intente imprimir 
el objeto, muestre una cadena con la información del libro.
*/

class Libro {
    private $titulo;
    private $autor;

    public function __construct($titulo, $autor) {
        $this->titulo = $titulo;
        $this->autor = $autor;
    }

    // Método mágico __toString para representar el objeto como una cadena
    public function __toString() {
        return "Título: {$this->titulo}, Autor: {$this->autor}";
    }
}


$libro1 = new Libro("Cien años de soledad", "Gabriel García Márquez");
$libro2 = new Libro("1984", "George Orwell");

echo $libro1 . "\n"; 
echo $libro2 . "\n"; 
?>
