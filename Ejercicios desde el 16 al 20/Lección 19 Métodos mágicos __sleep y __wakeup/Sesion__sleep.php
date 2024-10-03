<?php
/*
Ejercicio 1 (__sleep): Crea una clase Sesion que tenga información sensible como 
contraseñas. Implementa el método mágico __sleep para serializar solo los 
atributos que no sean sensibles.
*/

class Sesion {
    private $usuario;
    private $contrasena; 
    private $email;

    public function __construct($usuario, $contrasena, $email) {
        $this->usuario = $usuario;
        $this->contrasena = $contrasena;
        $this->email = $email;
    }

    // Método mágico __sleep para serializar solo atributos no sensibles
    public function __sleep() {
        // Devuelve un array con los nombres de los atributos a serializar
        return ['usuario', 'email'];
    }

    public function obtenerContrasena() {
        return $this->contrasena;
    }

    public function mostrarInformacion() {
        return "Usuario: {$this->usuario}, Email: {$this->email}";
    }
}

$miSesion = new Sesion("usuario123", "mi_contrasena_secreta", "usuario@example.com");

$serializedSesion = serialize($miSesion);
echo "Sesión serializada: " . $serializedSesion . "\n";

$deserializedSesion = unserialize($serializedSesion);

echo "Información de la sesión: " . $deserializedSesion->mostrarInformacion() . "\n";
echo "Contraseña: " . $deserializedSesion->obtenerContrasena() . "\n"; 
?>