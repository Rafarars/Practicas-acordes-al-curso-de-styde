<?php
/*
Ejercicio 1: Crea una clase Pedido que tenga propiedades como id, cliente, y productos. 
Implementa el método mágico __clone para asegurarte de que cuando clones un pedido, 
los productos sean duplicados, pero el cliente permanezca igual.
*/

class Pedido {
    private $id;
    private $cliente;
    private $productos;

    public function __construct($id, $cliente, $productos = []) {
        $this->id = $id;
        $this->cliente = $cliente;
        $this->productos = $productos;
    }

    // Método mágico __clone
    public function __clone() {
        // Duplicar los productos
        $this->productos = array_map(function($producto) {
            return clone $producto;
        }, $this->productos);
    }

    public function agregarProducto($producto) {
        $this->productos[] = $producto;
    }

    public function mostrarInformacion() {
        $productosLista = implode(", ", array_map(function($producto) {
            return $producto->getNombre();
        }, $this->productos));

        return "Pedido ID: {$this->id}, Cliente: {$this->cliente}, Productos: [{$productosLista}]";
    }
}

class Producto {
    private $nombre;

    public function __construct($nombre) {
        $this->nombre = $nombre;
    }

    public function getNombre() {
        return $this->nombre;
    }
}

$producto1 = new Producto("Camiseta");
$producto2 = new Producto("Pantalón");

$pedidoOriginal = new Pedido(1, "Cliente1", [$producto1, $producto2]);

echo $pedidoOriginal->mostrarInformacion() . "\n";

$pedidoClonado = clone $pedidoOriginal;

echo $pedidoClonado->mostrarInformacion() . "\n";

$pedidoClonado->agregarProducto(new Producto("Zapatos"));

echo "Después de agregar un producto al pedido clonado:\n";
echo $pedidoOriginal->mostrarInformacion() . "\n";
echo $pedidoClonado->mostrarInformacion() . "\n";
?>
