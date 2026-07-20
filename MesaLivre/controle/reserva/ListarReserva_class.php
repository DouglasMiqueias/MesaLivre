<?php
include_once("modelo/reserva/ReservaDAO_class.php");

class ListarReserva{
    public function __construct(){
        $dao = new ReservaDAO();
        $lista = $dao->listar();

        include_once("visao/reserva/listaReserva.php");

    }
}
?>