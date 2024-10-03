<?php
/*
Enunciado: Implementa una clase Producto con propiedades privadas nombre y precio. 
Crea métodos getNombre, setNombre, getPrecio y setPrecio para encapsular estas propiedades. 
Luego, crea un objeto Producto y cambia el valor del precio usando el setter.
*/


class Producto{
    private $nombre ;
    private $precio;

    public function __construct(string $nombre, float $precio){
        $this->nombre = $nombre;
        $this->precio = $precio;
    }

    public function getnombre(){
        return $this->nombre;
    }

    public function setsnombre($nombre){
        $this->nombre= $nombre ;
    }

    public function getprecio(){
        return $this->precio;
    }

    public function setsprecio($precio){
        $this->precio= $precio ;
    }

    public function mostrar(){
        return $this->nombre." ". $this->precio;
    }
    
}

$pro=new Producto("harina", 10.4);
echo $pro-> mostrar() ,"\n";
$pro->setsnombre(23);
echo $pro-> mostrar(), "\n";
