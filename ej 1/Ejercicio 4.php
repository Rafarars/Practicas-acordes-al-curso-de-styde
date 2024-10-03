<?php
/*
Ejercicio 4: Polimorfismo

Objetivo: Usar el polimorfismo a través de la herencia y métodos sobrescritos.

Descripción: Crea una clase base Animal con un método hacerSonido(). 
Luego, crea las clases Perro y Gato que sobrescriban este método para hacer un sonido diferente.

Instrucciones:

Define la clase Animal con el método hacerSonido().
Sobrescribe el método en Perro y Gato para que cada clase tenga su propio comportamiento.
Crea instancias de Perro y Gato y llama al método hacerSonido().
*/

class animal {
    public function HacerSonido(){
        echo "\nEl animal hace un sonido";
    }
}

class perro extends animal{
    public function HacerSonido(){
        echo "\nEl perro ladra";
    }
}

class gato extends animal{
    public function HacerSonido(){
        echo "\nEl gato maulla";
    }
}

$perro1 = new perro();

$gato1 = new gato();
 
$perro1-> HacerSonido();

$gato1-> HacerSonido();

$perro1-> HacerSonido();
