<?php

namespace Practicas\Polimorfismo;

require 'vendor/autoload.php'; 

// Crear un pago con tarjeta
$pagoTarjeta = new PagoTarjeta(100, "1234 5678 9012 3456", "Juan Perez");
$ordenTarjeta = new Orden($pagoTarjeta);
$ordenTarjeta->procesarOrden();

echo "\n";

// Crear un pago en efectivo
$pagoEfectivo = new PagoEfectivo(50);
$ordenEfectivo = new Orden($pagoEfectivo);
$ordenEfectivo->procesarOrden();

echo "\n";

// Crear un pago con PayPal
$pagoPayPal = new PagoPayPal(200, "user@paypal.com");
$ordenPayPal = new Orden($pagoPayPal);
$ordenPayPal->procesarOrden();

