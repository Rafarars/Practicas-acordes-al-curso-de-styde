<?php

/*Ejercicio 1: Clases y objeto

Objetivo: Crear una clase sencilla y un objeto.

Descripción: Crea una clase llamada Coche con las siguientes propiedades: 
marca, modelo, año. Luego, define un método llamado mostrarInfo que muestre la información del coche.

Instrucciones:

Define la clase Coche.
Crea un constructor que permita inicializar los atributos.
Define el método mostrarInfo que imprima los valores de los atributos.
Instancia al menos dos objetos de Coche con diferentes valores y muestra su información.
*/

class coche {
    public $marca;
    public $modelo;
    public $año;
    
    public function __construct($marca, $modelo, $año){
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->año = $año;
    }

    public function MostrarInfo(){
        echo "coche: $this->marca, $this->modelo, Año: $this->año";
    }
}

$coche1 = new coche('Ferrari','F50',2002);

$coche1->MostrarInfo();