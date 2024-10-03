<?php
/*
Ejercicio 2: Crea otro trait llamado Validable que tenga un método isValid que 
retorne un booleano dependiendo de las propiedades de la clase. 
Usa este trait en una clase Producto y verifica si el producto es válido basado en sus propiedades.
*/
// Definir el trait Validable

// Definir el trait Validable
trait Validable {
    // Método para verificar si las propiedades de la clase son válidas
    public function isValid() {
        foreach (get_object_vars($this) as $prop => $value) {
            if (empty($value)) {
                return false; 
            }
        }
        return true;
    }
}


class Producto {
    use Validable; // Incluir el trait Validable en la clase

    private $nombre;
    private $precio;
    private $stock;

    public function __construct($nombre, $precio, $stock) {
        $this->nombre = $nombre;
        $this->precio = $precio;
        $this->stock = $stock;
    }

    public function mostrarInfo() {
        echo "Producto: " . $this->nombre . "\n";
        echo "Precio: $" . $this->precio . "\n";
        echo "Stock: " . $this->stock . " unidades\n";
    }
}

$producto1 = new Producto("Laptop", 1200, 10);
$producto2 = new Producto("Smartphone", 0, 0); 

echo "Verificación del producto 1:\n";
$producto1->mostrarInfo();
echo "¿Es válido? " . ($producto1->isValid() ? "Sí" : "No") . "\n\n";

echo "Verificación del producto 2:\n";
$producto2->mostrarInfo();
echo "¿Es válido? " . ($producto2->isValid() ? "Sí" : "No") . "\n";
?>