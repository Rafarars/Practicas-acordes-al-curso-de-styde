<?php
// Clase Motor
class Motor {
    private $estado;

    // Constructor para inicializar el estado del motor como apagado
    public function __construct() {
        $this->estado = false; // false = apagado, true = encendido
    }

    // Método para arrancar el motor
    public function arrancar() {
        if (!$this->estado) {
            $this->estado = true;
            echo "El motor ha sido arrancado.\n";
        } else {
            echo "El motor ya está encendido.\n";
        }
    }

    // Método para detener el motor
    public function detener() {
        if ($this->estado) {
            $this->estado = false;
            echo "El motor ha sido detenido.\n";
        } else {
            echo "El motor ya está apagado.\n";
        }
    }

    // Método para verificar el estado del motor
    public function obtenerEstado() {
        return $this->estado ? "encendido" : "apagado";
    }
}

// Clase Carro
class Carro {
    private $motor;

    // Constructor que recibe un objeto de tipo Motor
    public function __construct(Motor $motor) {
        $this->motor = $motor;
    }

    // Método para arrancar el motor del carro
    public function arrancarCarro() {
        echo "Intentando arrancar el carro...\n";
        $this->motor->arrancar();
    }

    // Método para detener el motor del carro
    public function detenerCarro() {
        echo "Intentando detener el carro...\n";
        $this->motor->detener();
    }

    // Método para verificar el estado del motor del carro
    public function estadoCarro() {
        echo "El motor está actualmente " . $this->motor->obtenerEstado() . ".\n";
    }
}

// Ejemplo de uso
$motor = new Motor();  // Crear un objeto Motor
$carro = new Carro($motor);  // Crear un objeto Carro con el motor

// Arrancar y detener el carro
$carro->estadoCarro();    // Verificar el estado actual del motor
$carro->arrancarCarro();  // Arrancar el motor
$carro->estadoCarro();    // Verificar el estado después de arrancar
$carro->detenerCarro();   // Detener el motor
$carro->estadoCarro();    // Verificar el estado después de detener

?>

/// hablamoa ahorita 
