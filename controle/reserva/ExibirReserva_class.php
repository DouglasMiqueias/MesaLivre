<?php
include_once("modelo/reserva/ReservaDAO_class.php");

class ExibirReserva{
    public function __construct(){
        $dao = new ReservaDAO();
        $r = $dao->exibir($_GET["id"]);
        
        include_once("visao/reserva/exibeReserva.php");
    }
}
?>