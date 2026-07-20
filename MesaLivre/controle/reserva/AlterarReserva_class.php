<?php
include_once("modelo/reserva/ReservaDAO_class.php");

class AlterarReserva{
    public function __construct(){
        if((isset($_POST["enviar"]))){
            $r = new Reserva();
            $r->setIdReserva($_POST["id_reserva"]);
            $r->setIdCliente($_POST["id_cliente"]);
            $r->setIdMesa($_POST["id_mesa"]);
            $r->setDataReserva($_POST["data_reserva"]);
            $r->setHoraReserva($_POST["hora_reserva"]);
            $r->setNumeroPessoas($_POST["numero_pessoas"]);
            $r->setObservacoes($_POST["observacoes"]);
            $r->setStatus($_POST["status"]);
            
            $dao = new ReservaDAO();
            $dao->alterar($r);
            
            $status = "Reserva " . $r->getIdReserva() . " alterada com sucesso!";
            
            $lista = $dao->listar();
            include_once("visao/reserva/listaReserva.php");            
        } else {
            $dao = new ReservaDAO();
            $r = $dao->exibir($_GET["id"]);
            include_once("visao/reserva/formAlteraReserva.php");
        }
    }
}
?>