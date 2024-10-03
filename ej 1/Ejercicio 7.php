<?php
/*
Ejercicio 6: Interfaces

Objetivo: Implementar interfaces en PHP.

Descripción: Define una interfaz Operaciones con los métodos sumar y restar.
Luego, crea una clase Calculadora que implemente estos métodos.
*/

interface operaciones {
    public function sumar($a,$b);
    public function restar($a,$b);
}

class calculadora implements operaciones{
    
    public function sumar($a,$b){
        return $a+$b;
    }

    public function restar($a,$b){
        return $a-$b;
    }
}

$calcu= new calculadora();

echo $calcu->sumar(5,5) ,"\n";

echo $calcu->restar(5,5);