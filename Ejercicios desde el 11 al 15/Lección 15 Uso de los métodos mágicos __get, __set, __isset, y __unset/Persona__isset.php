<?php
/*
Ejercicio 3 (__isset): Agrega el método mágico __isset a la clase Persona para 
comprobar si una propiedad está definida o no. Prueba este método 
utilizando la función isset en instancias de la clase.
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
            return null;  
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

    // Método mágico __isset para comprobar si una propiedad está definida
    public function __isset($propiedad) {
        return isset($this->$propiedad);
    }
}

$persona = new Persona("Juan", 30);

// Comprobar si las propiedades están definidas usando __isset
if (isset($persona->nombre)) {
    echo "La propiedad 'nombre' está definida.\n";  
} else {
    echo "La propiedad 'nombre' NO está definida.\n";
}

// Comprobar si la propiedad 'nombre' está definida manualmente
$nombre = $persona->__get("nombre");
if (null !== $nombre) {  
    echo "La propiedad 'nombre' está accesible.\n";  
} else {
    echo "La propiedad 'nombre' NO está accesible.\n";
}

if (isset($persona->edad)) {
    echo "La propiedad 'edad' está definida.\n";
} else {
    echo "La propiedad 'edad' NO está definida.\n";
}

// Comprobar si una propiedad inexistente está definida
if (isset($persona->direccion)) {
    echo "La propiedad 'direccion' está definida.\n";
} else {
    echo "La propiedad 'direccion' NO está definida.\n";  
}
?>
