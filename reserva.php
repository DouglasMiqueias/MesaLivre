<?php
session_start();

if(!isset($_SESSION['logado']) || $_SESSION['logado'] != true){
    header("Location: usuario.php?fun=logar");
    exit();
}

include_once("visao/topo.php");

    if(isset($_GET["fun"])){
        $fun = $_GET["fun"];

        if($fun == "cadastrar"){
            include_once("controle/reserva/CadastrarReserva_class.php");
            $pag = new CadastrarReserva();

        } elseif($fun == "alterar"){
            include_once("controle/reserva/AlterarReserva_class.php");
            $pag = new AlterarReserva();

        } elseif($fun == "excluir"){
            include_once("controle/reserva/ExcluirReserva_class.php");
            $pag = new ExcluirReserva();

        } elseif($fun == "listar"){
            include_once("controle/reserva/ListarReserva_class.php");
            $pag = new ListarReserva();

        } elseif($fun == "exibir") {
            include_once("controle/reserva/ExibirReserva_class.php");
            $pag = new ExibirReserva();

        } elseif($fun == "consultar") {
            include_once("controle/reserva/ConsultarReserva_class.php");
            $pag = new ConsultarReserva();

        } else {
            include_once("controle/reserva/ListarReserva_class.php");
            $pag = new ListarReserva();
        }

    } else {
        include_once("controle/reserva/ListarReserva_class.php");
        $pag = new ListarReserva();
    }

include_once("visao/base.php");
