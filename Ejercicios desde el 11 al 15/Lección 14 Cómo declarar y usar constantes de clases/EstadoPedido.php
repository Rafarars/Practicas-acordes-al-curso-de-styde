<?php
/*
Ejercicio 2: Crea una clase EstadoPedido con constantes que representen los 
diferentes estados de un pedido (PENDIENTE, PROCESADO, ENVIADO, ENTREGADO). 
Implementa un método que reciba un estado y devuelva un mensaje adecuado.
*/

class EstadoPedido {
    const PENDIENTE = 'pendiente';
    const PROCESADO = 'procesado';
    const ENVIADO = 'enviado';
    const ENTREGADO = 'entregado';

    // Método que recibe un estado y devuelve un mensaje adecuado
    public static function obtenerMensajeEstado($estado) {
        switch ($estado) {
            case self::PENDIENTE:
                return "El pedido está pendiente de ser procesado.";
            case self::PROCESADO:
                return "El pedido ha sido procesado.";
            case self::ENVIADO:
                return "El pedido ha sido enviado.";
            case self::ENTREGADO:
                return "El pedido ha sido entregado.";
            default:
                return "Estado no reconocido.";
        }
    }
}

$estadoActual = EstadoPedido::ENVIADO;
echo EstadoPedido::obtenerMensajeEstado($estadoActual); 
?>
