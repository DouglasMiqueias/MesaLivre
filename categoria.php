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
            include_once("controle/categoria/CadastrarCategoria_class.php");
            $pag = new CadastrarCategoria();

        } elseif($fun == "alterar"){
            include_once("controle/categoria/AlterarCategoria_class.php");
            $pag = new AlterarCategoria();

        } elseif($fun == "excluir"){
            include_once("controle/categoria/ExcluirCategoria_class.php");
            $pag = new ExcluirCategoria();

        } elseif($fun == "listar"){
            include_once("controle/categoria/ListarCategoria_class.php");
            $pag = new ListarCategoria();

        } elseif($fun == "exibir") {
            include_once("controle/categoria/ExibirCategoria_class.php");
            $pag = new ExibirCategoria();

        } elseif($fun == "consultar") {
            include_once("controle/categoria/ConsultarCategoria_class.php");
            $pag = new ConsultarCategoria();

        } else {
            include_once("controle/categoria/ListarCategoria_class.php");
            $pag = new ListarCategoria();
        }

    } else {
        include_once("controle/categoria/ListarCategoria_class.php");
        $pag = new ListarCategoria();
    }

include_once("visao/base.php");
