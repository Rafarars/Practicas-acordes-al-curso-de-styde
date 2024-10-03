<?php
/*
Ejercicio 2: Crea una clase Configuracion con una propiedad estática que 
almacene un valor por defecto, como la versión de una aplicación. 
Implementa un método estático que permita cambiar esta configuración y otro que permita obtenerla. 
Prueba los métodos estáticos sin instanciar la clase. en php OOB
*/

class Configuracion {
    private static $version = "1.0.0";

    public static function setVersion($nuevaVersion) {
        self::$version = $nuevaVersion;
    }

    public static function getVersion() {
        return self::$version;
    }
}

// Uso de los métodos estáticos sin instanciar la clase

echo "Versión por defecto: " . Configuracion::getVersion() . "\n";

Configuracion::setVersion("2.0.1");

echo "Nueva versión: " . Configuracion::getVersion() . "\n";
