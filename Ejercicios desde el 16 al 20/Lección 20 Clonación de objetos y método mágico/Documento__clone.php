<?php
/*
Ejercicio 2: Crea una clase Documento que tenga un método para clonar documentos. 
Usa el método mágico __clone para personalizar el proceso de clonación y modificar 
ciertas propiedades del documento clonado.
*/

class Documento {
    private $titulo;
    private $contenido;
    private $fechaCreacion;

    public function __construct($titulo, $contenido) {
        $this->titulo = $titulo;
        $this->contenido = $contenido;
        $this->fechaCreacion = new DateTime(); // Establecer la fecha de creación al momento de instanciar
    }

    // Método mágico __clone
    public function __clone() {
        // Modificar ciertas propiedades en el documento clonado
        $this->titulo .= " (copia)"; // Agregar "(copia)" al título
        $this->fechaCreacion = new DateTime(); // Cambiar la fecha de creación al momento de clonar
    }

    public function mostrarInformacion() {
        return "Título: {$this->titulo}, Contenido: {$this->contenido}, Fecha de Creación: {$this->fechaCreacion->format('Y-m-d H:i:s')}";
    }
}

$documentoOriginal = new Documento("Título Original", "Este es el contenido del documento.");

echo $documentoOriginal->mostrarInformacion() . "\n";

$documentoClonado = clone $documentoOriginal;

echo $documentoClonado->mostrarInformacion() . "\n";
?>
