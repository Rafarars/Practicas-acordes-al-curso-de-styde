<?php
/*
Ejercicio 1: Crea un trait llamado Macroable que permita agregar métodos dinámicamente 
a una clase usando el método mágico __call. Implementa un ejemplo de cómo se pueden usar estos métodos en una clase Carrito.
*/

trait Macroable {
    protected static $macros = [];

    // Método para agregar un nuevo método dinámico
    public static function addMacro($name, $macro) {
        self::$macros[$name] = $macro;
    }

    // Método mágico __call para invocar los métodos dinámicos
    public function __call($name, $arguments) {
        if (isset(self::$macros[$name])) {
            return call_user_func_array(self::$macros[$name], $arguments);
        }
        throw new BadMethodCallException("El método {$name} no está definido.");
    }
}

class Carrito {
    use Macroable;

    private $productos = [];

    // Método para añadir un producto al carrito
    public function agregarProducto($producto, $cantidad) {
        $this->productos[] = ['producto' => $producto, 'cantidad' => $cantidad];
        echo "Producto agregado: $producto, Cantidad: $cantidad\n";
    }

    public function mostrarProductos() {
        foreach ($this->productos as $item) {
            echo "Producto: {$item['producto']}, Cantidad: {$item['cantidad']}\n";
        }
    }
}

$carrito = new Carrito();

$carrito->agregarProducto('Manzanas', 5);
$carrito->agregarProducto('Naranjas', 3);

echo "\nContenido del carrito:\n";
$carrito->mostrarProductos();

// Añadir un método dinámico (macro) para calcular el total de productos
Carrito::addMacro('calcularTotal', function() use ($carrito) {
    $total = 0;
    foreach ($carrito->productos as $item) {
        $total += $item['cantidad'];
    }
    return $total;
});

echo "\nTotal de productos en el carrito: " . $carrito->calcularTotal() . "\n";

// Añadir otro método dinámico (macro) para vaciar el carrito
Carrito::addMacro('vaciarCarrito', function() use ($carrito) {
    $carrito->productos = [];
    echo "El carrito ha sido vaciado.\n";
});

$carrito->vaciarCarrito();
?>
