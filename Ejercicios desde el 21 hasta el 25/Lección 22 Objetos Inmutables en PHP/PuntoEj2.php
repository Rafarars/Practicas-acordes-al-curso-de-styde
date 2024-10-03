<?php
/*
Ejercicio 2: Implementa un método en la clase Punto que devuelva un nuevo objeto 
Punto que sea el resultado de sumar dos puntos. Asegúrate de que el objeto original no se modifique.
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

    public function sumar(Punto $otroPunto) {
        // Crear y devolver un nuevo objeto Punto con la suma de las coordenadas
        return new Punto($this->x + $otroPunto->getX(), $this->y + $otroPunto->getY());
    }
}

$punto1 = new Punto(10, 20);
$punto2 = new Punto(5, 7);

// Sumar los dos puntos sin modificar los originales
$puntoSumado = $punto1->sumar($punto2);

// Mostrar el resultado de la suma
echo "Punto 1: (" . $punto1->getX() . ", " . $punto1->getY() . ")\n";
echo "Punto 2: (" . $punto2->getX() . ", " . $punto2->getY() . ")\n";
echo "Punto Sumado: (" . $puntoSumado->getX() . ", " . $puntoSumado->getY() . ")\n";
?>
