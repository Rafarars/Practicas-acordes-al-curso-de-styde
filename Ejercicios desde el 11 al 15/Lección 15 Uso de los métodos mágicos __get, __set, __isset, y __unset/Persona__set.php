<?php
/*
Ejercicio 2 (__set): Extiende la clase anterior para implementar el método 
mágico __set, permitiendo modificar los atributos nombre y edad. 
Utiliza este método para asignar valores desde fuera de la clase.
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

    // Método mágico __set para modificar los atributos privados
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
}

$persona = new Persona("Juan", 30);

echo "Nombre: " . $persona->__get("nombre") . "\n"; 
echo "Edad: " . $persona->__get("edad") . "\n";     

// Modificar los atributos usando __set
$persona->__set("nombre", "Carlos");
$persona->__set("edad", 35);

// Verificar los cambios con __get
echo "Nuevo Nombre: " . $persona->__get("nombre") . "\n"; 
echo "Nueva Edad: " . $persona->__get("edad") . "\n";     

// Intentar asignar un valor no numérico a la edad
$persona->__set("edad", "treinta"); 

// Intentar modificar un atributo que no existe
$persona->__set("direccion", "Calle Falsa 123"); 
?>
