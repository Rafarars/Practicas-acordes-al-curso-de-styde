<?php
/*
Enunciado: Crea una interfaz Vehiculo con un método acelerar. 
Luego crea clases Bicicleta y Coche que implementen la interfaz de diferentes maneras.
*/

interface Vehiculo{
    public function acelarate();
}

class bicicleta{
    public function acelarate(){
        echo "la bicicleta acelera\n";
    }
}

class coche{
    public function acelarate(){
        echo "El coche acelera\n";
    }
}

$car=new coche();
$car->acelarate();
$bici=new bicicleta();
$bici->acelarate();