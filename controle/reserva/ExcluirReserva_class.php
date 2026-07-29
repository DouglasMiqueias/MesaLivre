<?php
include_once("modelo/reserva/ReservaDAO_class.php");           

class ExcluirReserva{
    public function __construct(){
        if(isset($_GET["op"]))
            {
                $op = $_GET["op"];
                
                if($op == "sim"){
                    $r = new Reserva();
                    $r->setIdReserva($_GET["id"]);
                    
                    $dao = new ReservaDAO();
                    $dao->excluir($r);
                    
                    $status = "Reserva excluída com sucesso!";
                    
                    $lista = $dao->listar();
                    include_once("visao/reserva/listaReserva.php");
                } else {
                    echo "<script type='text/javascript'> location.href='reserva.php?fun=listar'; </script>";
                }
            } else {
                include_once("visao/reserva/pagAutorizaExcluir.php");
            }
    }
}