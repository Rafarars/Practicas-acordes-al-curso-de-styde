<?php
/*
Enunciado: Crea una clase Pedido y otra clase Cliente. 
El Pedido debe contener información sobre el cliente 
y permitir que puedas obtener el nombre del cliente que realizó el pedido.
*/

class  cliente {
    private $name;
    private $id;

    public function __construct(string $name, $id){
        $this->name = $name;
        $this->id = $id;      
    }

    public function mostrarCliente(){
        return $this->name . " C.I: " . $this->id;
    }
}       

class pedido {
    private $cliente;
    private $producto;
    private $fecha;

    public function __construct(cliente $cliente, $producto, $fecha){
        $this->cliente = $cliente;
        $this->producto = $producto;
        $this->fecha = $fecha;
    }

    public function MostrarPedido(){
        echo "el cliente: " . $this->cliente->mostrarCliente();
        echo " Realizo un pedido de: ". $this->producto;
        echo " El pedido se realizo la fecha del: ". $this->fecha;
    }
}

$cliente= new cliente ("Rafael", "27.288.616");
$pedido = new pedido ($cliente, "PC", "04/05/2024");

 $pedido->MostrarPedido();