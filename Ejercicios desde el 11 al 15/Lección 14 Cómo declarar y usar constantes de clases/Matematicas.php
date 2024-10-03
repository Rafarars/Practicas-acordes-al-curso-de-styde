<?php
/*
Ejercicio 1: Crea una clase Matematicas que tenga constantes como PI y EULER. 
Utiliza estas constantes dentro de métodos de la clase para realizar cálculos 
(por ejemplo, el área de un círculo o el logaritmo natural).
*/

class Matematicas {
    const PI = 3.14159265359;
    const EULER = 2.71828182846;

    public static function areaCirculo($radio) {
        return self::PI * pow($radio, 2); 
    }

    public static function logaritmoNatural($numero) {
        return log($numero, self::EULER); 
    }
}

$radio = 5;
$area = Matematicas::areaCirculo($radio);
echo "El área de un círculo con radio $radio es: $area\n";

$numero = 10;
$logNatural = Matematicas::logaritmoNatural($numero);
echo "El logaritmo natural de $numero es: $logNatural\n";

?>
