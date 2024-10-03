<?php
/*
Ejercicio 2 (__invoke): Crea una clase Contador que implemente el método 
mágico __invoke. El método debe incrementar un contador cada vez que se 
invoque al objeto como si fuera una función.
*/

class Contador {
    private $contador;

    public function __construct() {
        $this->contador = 0; 
    }

    // Método mágico __invoke para incrementar el contador
    public function __invoke() {
        $this->contador++; 
        return $this->contador; 
    }
}

$miContador = new Contador();


echo $miContador() . "\n"; 
echo $miContador() . "\n"; 
echo $miContador() . "\n"; 
