<?php
/*
Ejercicio 1: Crea una clase Persona con propiedades nombre y edad. Implementa el método __toString() 
para que devuelva una representación legible del objeto. Luego, compara dos objetos de la 
clase Persona usando == y === y explica las diferencias en los resultados.
*/

class Persona {
    private $nombre;
    private $edad;

    public function __construct($nombre, $edad) {
        $this->nombre = $nombre;
        $this->edad = $edad;
    }

    // Método mágico __toString para devolver una representación legible del objeto
    public function __toString() {
        return "Nombre: " . $this->nombre . ", Edad: " . $this->edad;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function getEdad() {
        return $this->edad;
    }
}

$persona1 = new Persona("Juan", 30);
$persona2 = new Persona("Juan", 30);
$persona3 = $persona1; 

echo $persona1 . "\n"; 
echo $persona2 . "\n"; 

// Comparación usando ==
if ($persona1 == $persona2) {
    echo "persona1 y persona2 son iguales con ==\n";
} else {
    echo "persona1 y persona2 NO son iguales con ==\n";
}

// Comparación usando ===
if ($persona1 === $persona2) {
    echo "persona1 y persona2 son iguales con ===\n";
} else {
    echo "persona1 y persona2 NO son iguales con ===\n";
}

// Comparación usando === (referencia al mismo objeto)
if ($persona1 === $persona3) {
    echo "persona1 y persona3 son el mismo objeto con ===\n";
}
?>
