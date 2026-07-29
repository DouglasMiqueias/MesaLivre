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
			include_once("controle/produto/CadastrarProduto_class.php");
			$pag = new CadastrarProduto();

		} elseif($fun == "alterar"){
			include_once("controle/produto/AlterarProduto_class.php");
			$pag = new AlterarProduto();

		} elseif($fun == "excluir"){
			include_once("controle/produto/ExcluirProduto_class.php");
			$pag = new ExcluirProduto();

		} elseif($fun == "listar"){
			include_once("controle/produto/ListarProduto_class.php");
			$pag = new ListarProduto();

		} elseif($fun == "exibir") {
			include_once("controle/produto/ExibirProduto_class.php");
			$pag = new ExibirProduto();

		} elseif($fun == "consultar") {
			include_once("controle/produto/ConsultarProduto_class.php");
			$pag = new ConsultarProduto();

		} else {
			include_once("controle/produto/ListarProduto_class.php");
			$pag = new ListarProduto();
		}
			
	} else {
		include_once("controle/produto/ListarProduto_class.php");
		$pag = new ListarProduto();
	}
	
include_once("visao/base.php");

?>
