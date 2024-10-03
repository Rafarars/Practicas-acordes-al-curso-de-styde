<?php
/*
Enunciado: Crea dos clases: Carro y Motor. 
La clase Carro debe tener un objeto de tipo Motor como propiedad, 
y debe haber un método en Carro que permita arrancar el motor utilizando un método en la clase Motor.
*/

class motor{
    public function arrancarMotor(){
        echo "El motor arranca";
    }
}

class carro extends motor{
    private $tipomotor;

    public function __construct($tipomotor){
        $this->tipomotor=$tipomotor;
    }

    public function arrancar(){
        parent::arrancarMotor();
    }
}

$car=new carro("v8");
echo $car->arrancar();