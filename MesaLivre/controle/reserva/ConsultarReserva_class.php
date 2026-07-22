<?php
include_once("modelo/reserva/ReservaDAO_class.php");

class ConsultarReserva{
    public function __construct(){
        $dao = new ReservaDAO();
        include_once("visao/reserva/consultarReserva.php");
    }
}
?>
