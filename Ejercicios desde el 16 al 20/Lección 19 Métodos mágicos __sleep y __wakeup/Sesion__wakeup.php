<?php
/*
Ejercicio 2 (__wakeup): Extiende la clase anterior para implementar el método __wakeup, 
de modo que cuando se deserialice el objeto, se pueda reestablecer la conexión a una 
base de datos o recurso externo.
*/

class Sesion {
    private $usuario;
    private $contrasena; // Atributo sensible
    private $email;
    private $conexion; 

    public function __construct($usuario, $contrasena, $email) {
        $this->usuario = $usuario;
        $this->contrasena = $contrasena; 
        $this->email = $email;
        $this->conexion = null; 
    }

    // Método mágico __sleep para serializar solo atributos no sensibles
    public function __sleep() {
        return ['usuario', 'email']; 
    }

    // Método mágico __wakeup para restaurar la conexión
    public function __wakeup() {
        // Simula la restauración de una conexión a una base de datos o recurso externo
        $this->conexion = $this->restaurarConexion();
    }

    // Simula la restauración de la conexión
    private function restaurarConexion() {
        // Aquí podrías agregar la lógica para conectarte a la base de datos
        return "Conexión a la base de datos restaurada.";
    }

    public function obtenerContrasena() {
        return $this->contrasena;
    }

    public function mostrarInformacion() {
        return "Usuario: {$this->usuario}, Email: {$this->email}, Conexión: {$this->conexion}";
    }
}

$miSesion = new Sesion("usuario123", "mi_contrasena_secreta", "usuario@example.com");

$serializedSesion = serialize($miSesion);
echo "Sesión serializada: " . $serializedSesion . "\n";

$deserializedSesion = unserialize($serializedSesion);

echo "Información de la sesión: " . $deserializedSesion->mostrarInformacion() . "\n";
echo "Contraseña: " . $deserializedSesion->obtenerContrasena() . "\n"; 
