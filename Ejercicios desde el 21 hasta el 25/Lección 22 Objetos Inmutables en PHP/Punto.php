<?php
/*
Ejercicio 1: Crea una clase inmutable llamada Punto que tenga propiedades x y y. 
Implementa un constructor que asigne valores a estas propiedades y asegúrate de que no 
haya métodos que modifiquen el estado del objeto después de su creación.
*/

final class Punto {
    private $x;
    private $y;

    public function __construct($x, $y) {
        $this->x = $x;
        $this->y = $y;
    }

    public function getX() {
        return $this->x;
    }

    public function getY() {
        return $this->y;
    }

    // Evitar la modificación directa de las propiedades mediante __set
    public function __set($name, $value) {
        throw new Exception("No puedes modificar las propiedades de un objeto inmutable.");
    }
}

$punto = new Punto(10, 20);

// Intentar acceder a los valores
echo "x: " . $punto->getX() . "\n";
echo "y: " . $punto->getY() . "\n";

// Intentar modificar las propiedades (esto lanzará una excepción)
$punto->x = 30; 
?>
