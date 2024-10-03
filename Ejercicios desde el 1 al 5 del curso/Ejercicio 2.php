<?php
/*
Enunciado: Crea una clase CuentaBancaria que contenga propiedades privadas como saldo y titular. 
Implementa métodos públicos getSaldo y setSaldo para acceder y modificar el saldo de manera segura. 
Usa estos métodos para interactuar con el saldo de la cuenta desde fuera de la clase.
*/

class CuentaBancaria{
    private $titular ;
    private $saldo;

    public function __construct(string $titular, float $saldo){
        $this->titular = $titular;
        $this->saldo = $saldo;
    }

    public function getsaldo(){
        return $this->saldo;
    }

    public function setsaldo($saldo){
        $this->saldo= $saldo ;
    }
}


$per= new CuentaBancaria("rafael",500);

echo $per->getsaldo();
$per->setsaldo(90);
echo $per->getsaldo();
