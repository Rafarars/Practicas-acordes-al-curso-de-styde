<?php
/*
Ejercicio 2: Crea una clase Producto con un constructor semántico 
que reciba el nombre del producto y su precio. 
Implementa métodos encadenados (interfaz fluida) para asignar una categoría al producto y 
modificar su precio. Crea un objeto Producto utilizando este enfoque. en php OOB
*/

class Producto {
    private $nombre;
    private $precio;
    private $categoria;

    // Constructor semántico para crear una nueva instancia de Producto
    public static function crear($nombre, $precio) {
        $producto = new self();
        $producto->nombre = $nombre;
        $producto->precio = $precio;
        return $producto;
    }

    // Método fluido para establecer la categoría
    public function setCategoria($categoria) {
        $this->categoria = $categoria;
        return $this; 
    }

    // Método fluido para cambiar el precio del producto
    public function setPrecio($precio) {
        $this->precio = $precio;
        return $this; 
    }

    public function mostrar() {
        echo "Producto: " . $this->nombre . "\n";
        echo "Precio: $" . $this->precio . "\n";
        echo "Categoría: " . $this->categoria . "\n";
    }
}

// Uso de la clase Producto con constructor semántico e interfaz fluida

$producto = Producto::crear("Laptop", 1200) 
            ->setCategoria("Electrónica")   
            ->setPrecio(1100);              

$producto->mostrar();
