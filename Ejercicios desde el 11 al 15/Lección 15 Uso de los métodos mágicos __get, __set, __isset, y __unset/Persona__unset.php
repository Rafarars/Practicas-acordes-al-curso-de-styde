<?php
/*
Ejercicio 4 (__unset): Implementa el método mágico __unset en 
la clase Persona para eliminar una propiedad. 
Utiliza la función unset para eliminar una propiedad y verifica el resultado.
*/

class Persona {
    private $nombre;
    private $edad;

    public function __construct($nombre, $edad) {
        $this->nombre = $nombre;
        $this->edad = $edad;
    }

    public function __get($propiedad) {
        if (property_exists($this, $propiedad)) {
            return $this->$propiedad;
        } else {
            return "Propiedad '$propiedad' no existe.";
        }
    }

    public function __set($propiedad, $valor) {
        if ($propiedad === 'edad' && !is_numeric($valor)) {
            echo "Error: La edad debe ser un número.\n";
            return;
        }
        if (property_exists($this, $propiedad)) {
            $this->$propiedad = $valor;
        } else {
            echo "No se puede asignar a '$propiedad'. No existe.\n";
        }
    }

    public function __isset($propiedad) {
        return isset($this->$propiedad);
    }

    // Método mágico __unset para eliminar una propiedad
    public function __unset($propiedad) {
        if (property_exists($this, $propiedad)) {
            unset($this->$propiedad); 
            echo "La propiedad '$propiedad' ha sido eliminada.\n";
        } else {
            echo "No se puede eliminar '$propiedad'. No existe.\n";
        }
    }
}

$persona = new Persona("Juan", 30);

// Comprobar si las propiedades existen antes de eliminarlas
echo "Comprobando propiedades antes de eliminarlas:\n";
echo isset($persona->nombre) ? "La propiedad 'nombre' está definida.\n" : "La propiedad 'nombre' NO está definida.\n";
echo isset($persona->edad) ? "La propiedad 'edad' está definida.\n" : "La propiedad 'edad' NO está definida.\n";

unset($persona->nombre);

// Verificar si la propiedad ha sido eliminada
echo "\nComprobando después de eliminar la propiedad 'nombre':\n";
echo isset($persona->nombre) ? "La propiedad 'nombre' está definida.\n" : "La propiedad 'nombre' NO está definida.\n";

// Intentar eliminar una propiedad que no existe
unset($persona->direccion);
?>
