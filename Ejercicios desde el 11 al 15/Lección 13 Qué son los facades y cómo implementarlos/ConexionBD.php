<?php
/*
Ejercicio 1: Implementa una clase ConexionBD que utilice un patrón Facade para 
gestionar una conexión a una base de datos. La clase debe tener métodos estáticos 
como conectar y desconectar que permitan manejar la conexión sin necesidad de instanciar la clase.
*/

class ConexionBD {
    private static $conexion;

    // Método estático para conectar a la base de datos
    public static function conectar($host, $usuario, $password, $db) {
        if (!self::$conexion) {
            // Conexión a la base de datos utilizando mysqli
            self::$conexion = new mysqli($host, $usuario, $password, $db);

            // Verificar si hubo algún error en la conexión
            if (self::$conexion->connect_error) {
                die("Error en la conexión: " . self::$conexion->connect_error);
            } else {
                echo "Conexión establecida correctamente.\n";
            }
        }
        return self::$conexion;
    }

    // Método estático para desconectar de la base de datos
    public static function desconectar() {
        if (self::$conexion) {
            self::$conexion->close();
            self::$conexion = null;
            echo "Conexión cerrada correctamente.\n";
        }
    }
}

// Uso de la clase ConexionBD con el patrón Facade

$conexion = ConexionBD::conectar('localhost', 'root', 'rafa2502', 'mi_base_de_datos');

// Realizar consultas a la base de datos (ejemplo)
if ($conexion) {
    $resultado = $conexion->query("SELECT * FROM usuarios");
    
    // Verificar si la consulta fue exitosa
    if ($resultado) {
        // Mostrar los resultados
        while ($fila = $resultado->fetch_assoc()) {
            echo "ID: " . $fila['id'] . " - Nombre: " . $fila['nombre'] . "\n";
        }
    } else {
        echo "Error en la consulta: " . $conexion->error . "\n";
    }
}

ConexionBD::desconectar();
?>
