<?php
/*
Ejercicio 2: Implementa una clase Controlador que pueda llamar dinámicamente a 
diferentes métodos (crear, leer, actualizar, eliminar) dependiendo del 
parámetro que reciba. Usa call_user_func para realizar las llamadas dinámicas.
*/

class Controlador {
    public function crear() {
        echo "Se ha creado un nuevo recurso.\n";
    }

    public function leer() {
        echo "Se está leyendo un recurso.\n";
    }

    public function actualizar() {
        echo "Se ha actualizado un recurso.\n";
    }

    public function eliminar() {
        echo "Se ha eliminado un recurso.\n";
    }
}

// Función para llamar dinámicamente a un método
function manejarAccion($controlador, $accion) {
    if (method_exists($controlador, $accion)) {
        call_user_func([$controlador, $accion]); 
    } else {
        echo "La acción '$accion' no está disponible.\n";
    }
}

$miControlador = new Controlador();

// Llamadas dinámicas a los métodos CRUD
manejarAccion($miControlador, 'crear');
manejarAccion($miControlador, 'leer');
manejarAccion($miControlador, 'actualizar');
manejarAccion($miControlador, 'eliminar');

// Intentar invocar un método que no existe
manejarAccion($miControlador, 'buscar');
?>
