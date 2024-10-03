<?php
/*
Ejercicio 2: Implementa una clase Archivo que utilice el patrón Facade para 
gestionar operaciones de lectura y escritura de archivos. 
Debe tener métodos como leer y escribir, que realicen estas operaciones sin que sea necesario crear una instancia de la clase.
*/

class Archivo {
    public static function escribir($nombreArchivo, $contenido) {
        // Abrir el archivo en modo de escritura
        $archivo = fopen($nombreArchivo, 'w');

        if ($archivo) {
            // Escribir el contenido en el archivo
            fwrite($archivo, $contenido);
            // Cerrar el archivo
            fclose($archivo);
            echo "Contenido escrito correctamente en '$nombreArchivo'.\n";
        } else {
            echo "Error al abrir el archivo '$nombreArchivo' para escritura.\n";
        }
    }

    // Método estático para leer un archivo
    public static function leer($nombreArchivo) {
        // Verificar si el archivo existe
        if (file_exists($nombreArchivo)) {
            // Leer el contenido del archivo
            $contenido = file_get_contents($nombreArchivo);
            echo "Contenido de '$nombreArchivo':\n";
            echo $contenido . "\n";
        } else {
            echo "El archivo '$nombreArchivo' no existe.\n";
        }
    }
}


Archivo::escribir('mi_archivo.txt', 'Hola, este es un contenido de ejemplo.');

Archivo::leer('mi_archivo.txt');

?>
