<?php
session_start();

if(!isset($_SESSION['logado']) || $_SESSION['logado'] != true){
	header("Location: ../landing.php");
	exit();
}

include_once("visao/topo.php");

	if(isset($_GET["fun"])){
		$fun = $_GET["fun"];
		
		if($fun == "cadastrar"){
			include_once("controle/cliente/CadastrarCliente_class.php");
			$pag = new CadastrarCliente();

		} elseif($fun == "alterar"){
			include_once("controle/cliente/AlterarCliente_class.php");
			$pag = new AlterarCliente();

		} elseif($fun == "excluir"){
			include_once("controle/cliente/ExcluirCliente_class.php");
			$pag = new ExcluirCliente();

		} elseif($fun == "listar"){
			include_once("controle/cliente/ListarCliente_class.php");
			$pag = new ListarCliente();

		} elseif($fun == "exibir") {
			include_once("controle/cliente/ExibirCliente_class.php");
			$pag = new ExibirCliente();

		} elseif($fun == "consultar") {
			include_once("controle/cliente/ConsultarCliente_class.php");
			$pag = new ConsultarCliente();

		} else {
			include_once("controle/cliente/ListarCliente_class.php");
			$pag = new ListarCliente();
		}
			
	} else {
		include_once("controle/cliente/ListarCliente_class.php");
		$pag = new ListarCliente();
	}
	
include_once("visao/base.php");

?>
