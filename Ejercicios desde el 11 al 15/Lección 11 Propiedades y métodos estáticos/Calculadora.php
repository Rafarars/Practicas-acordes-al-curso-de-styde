<?php
/*
Ejercicio 1: Crea una clase Calculadora con propiedades y métodos estáticos. 
Implementa un método estático llamado suma que reciba dos números y devuelva su suma. 
Luego, crea otro método estático llamado resta que reciba dos números y devuelva la diferencia. 
Usa estos métodos sin crear una instancia de la clase.
*/

class Calculadora {
    // Método estático para sumar dos números
    public static function suma($numero1, $numero2) {
        return $numero1 + $numero2;
    }

    // Método estático para restar dos números
    public static function resta($numero1, $numero2) {
        return $numero1 - $numero2;
    }
}

// Uso de los métodos estáticos sin instanciar la clase

$resultadoSuma = Calculadora::suma(10, 5);
echo "El resultado de la suma es: " . $resultadoSuma . "\n";

$resultadoResta = Calculadora::resta(10, 5);
echo "El resultado de la resta es: " . $resultadoResta . "\n";
