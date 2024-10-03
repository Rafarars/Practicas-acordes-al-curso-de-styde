<?php
/*
Enunciado: Crea un proyecto PHP utilizando Composer. 
Define un namespace y organiza las clases según la convención PSR-4. 
Implementa un archivo composer.json que defina la autocarga de clases y usa composer dump-autoload para generar la carga automática. 
Prueba el proyecto instanciando algunas clases.
*/
//namespace PracticasDeComposer;
require 'vendor/autoload.php';

use PracticasDeComposer\Vehiculo;
use PracticasDeComposer\Bicicleta;

$vehiculo = new Vehiculo();
$vehiculo->mover();

$bicicleta = new Bicicleta();
$bicicleta->pedalear();