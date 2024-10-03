<?php
/*
Ejercicio 2: Extiende el trait Macroable para que permita registrar macros y llamarlas. 
Crea una clase Pedido que use este trait y demuestra cómo se pueden agregar y utilizar métodos adicionales.
*/

trait Macroable {
    protected static $macros = [];

    // Método para registrar un nuevo macro
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

    // Método estático para invocar macros estáticas
    public static function __callStatic($name, $arguments) {
        if (isset(self::$macros[$name])) {
            return call_user_func_array(self::$macros[$name], $arguments);
        }
        throw new BadMethodCallException("El método {$name} no está definido.");
    }
}

class Pedido {
    use Macroable;

    private $productos = [];
    private $cliente;

    public function __construct($cliente) {
        $this->cliente = $cliente;
    }

    // Método para agregar un producto al pedido
    public function agregarProducto($producto, $cantidad) {
        $this->productos[] = ['producto' => $producto, 'cantidad' => $cantidad];
        echo "Producto agregado: $producto, Cantidad: $cantidad\n";
    }

    // Método para mostrar el contenido del pedido
    public function mostrarProductos() {
        if (empty($this->productos)) {
            echo "No hay productos en el pedido.\n";
            return;
        }
        foreach ($this->productos as $item) {
            echo "Producto: {$item['producto']}, Cantidad: {$item['cantidad']}\n";
        }
    }

    public function getCliente() {
        return $this->cliente;
    }
}

$pedido = new Pedido("Juan Pérez");

$pedido->agregarProducto('Laptop', 1);
$pedido->agregarProducto('Mouse', 2);

echo "\nContenido del pedido de {$pedido->getCliente()}:\n";
$pedido->mostrarProductos();

// Añadir un método dinámico (macro) para calcular el total de productos
Pedido::addMacro('calcularTotal', function() use ($pedido) {
    $total = 0;
    foreach ($pedido->productos as $item) {
        $total += $item['cantidad'];
    }
    return $total;
});

echo "\nTotal de productos en el pedido: " . $pedido->calcularTotal() . "\n";

// Añadir otro método dinámico (macro) para vaciar el pedido
Pedido::addMacro('vaciarPedido', function() use ($pedido) {
    $pedido->productos = [];
    echo "El pedido ha sido vaciado.\n";
});

$pedido->vaciarPedido();
?>
