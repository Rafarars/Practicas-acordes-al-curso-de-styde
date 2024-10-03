<?php
/*
Enunciado: Crea dos clases: Carro y Motor. 
La clase Carro debe tener un objeto de tipo Motor como propiedad, 
y debe haber un método en Carro que permita arrancar el motor utilizando un método en la clase Motor.
*/

class Motor{
    private $estado;

    public function __construct(){
        $this->estado = false;
    }

    public function arrancar(){
        if(!$this->estado){
            $this->estado = true;
            echo "El motor ha sido ensendido\n";
        }else{
            echo "el motor ya estaba encendido\n";
        }
    }

    public function detener(){
        if($this->estado){
            $this->estado = false;
            echo "El motor ha sido apagado\n";
        }else{
            echo "El motor ya estaba apagado\n";
        }
    }

    public function obtenerEstado(){
        return $this->estado ? "Encendido" : "Apagado";
    }

}

class carro {
    private $motor;

    public function __construct(Motor $motor){
        $this->motor = $motor;
    }

    public function arrancarCarro(){
        echo "intentando arrancar el carro...\n";
        $this->motor->arrancar();
    }

    public function detenerCarro(){
        echo "intentando detener el carro...\n";
        $this->motor->detener();
    }
    public function obtenerEstadoCarro(){
        echo "el estado del motor es ".
        $this->motor->obtenerEstado() . "\n";
    }

}

$motor=new Motor();
$car=new carro($motor);

echo $car->obtenerEstadoCarro();
$car->arrancarCarro();
$car->detenerCarro();
echo $car->obtenerEstadoCarro();
