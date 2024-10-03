<?php
/*
Ejercicio 2: Modifica la clase Libro para que también implemente la interfaz IteratorAggregate. 
Añade un método que devuelva un array asociativo de las propiedades del libro, 
y verifica que al iterar, se obtengan los valores correctos.
*/

class Libro implements IteratorAggregate {
    private $titulo;
    private $autor;
    private $anio;

    public function __construct($titulo, $autor, $anio) {
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->anio = $anio;
    }

    // Método que devuelve un array asociativo con las propiedades del libro
    public function getPropiedades() {
        return [
            'titulo' => $this->titulo,
            'autor' => $this->autor,
            'anio' => $this->anio
        ];
    }

    // Implementación de la interfaz IteratorAggregate
    public function getIterator() {
        return new ArrayIterator($this->getPropiedades());
    }
}

$libro = new Libro("Cien años de soledad", "Gabriel García Márquez", 1967);

// Iterar sobre las propiedades del libro usando foreach
foreach ($libro as $key => $value) {
    echo "$key: $value\n";
}
?>
