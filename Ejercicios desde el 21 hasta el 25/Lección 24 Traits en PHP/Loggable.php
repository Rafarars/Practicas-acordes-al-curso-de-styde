<?php
/*
Ejercicio 1: Crea un trait llamado Loggable que contenga un método log que imprima un mensaje de log. 
Usa este trait en una clase Usuario y demuestra cómo se puede utilizar el método log.
*/

trait Loggable {
    // Método para imprimir un mensaje de log
    public function log($mensaje) {
        echo "[LOG]: " . $mensaje . "\n";
    }
}

class Usuario {
    use Loggable; // Incluir el trait Loggable en la clase

    private $nombre;
    private $email;

    public function __construct($nombre, $email) {
        $this->nombre = $nombre;
        $this->email = $email;
    }

    public function mostrarInfo() {
        $this->log("Mostrando información del usuario: " . $this->nombre);
        echo "Nombre: " . $this->nombre . ", Email: " . $this->email . "\n";
    }
}

$usuario = new Usuario("Juan Pérez", "juan.perez@example.com");

$usuario->mostrarInfo();

// Usar directamente el método log desde la instancia de Usuario
$usuario->log("Este es un mensaje de prueba para el log.");
?>
