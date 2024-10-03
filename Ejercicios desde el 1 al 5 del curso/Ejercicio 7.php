<?php
/*
Enunciado: Define una interfaz OperacionesMatematicas con métodos sumar, restar, multiplicar y dividir. 
Luego, implementa esta interfaz en una clase llamada Calculadora que defina los métodos correspondientes.
*/

interface OperacionesMatematicas{
    public function resta($a,$b);
    public function suma($a,$b);
    public function multiplicacion($a,$b);
    public function division($a,$b);
}

class Calculadora implements OperacionesMatematicas{
    public function suma($a,$b){
        return $a + $b;
    }

    public function resta($a,$b){
        return $a - $b;
    }

    public function division($a,$b){
        return $a / $b;
    }

    public function multiplicacion($a,$b){
        return $a * $b;
    }
}

$cal= new Calculadora();

echo $cal->division(5, 2). "\n";
echo $cal->suma(5, 2). "\n";
echo $cal->resta(5, 2). "\n";
echo $cal->multiplicacion(5, 2). "\n";
