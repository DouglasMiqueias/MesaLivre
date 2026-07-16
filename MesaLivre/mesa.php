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
			include_once("controle/mesa/CadastrarMesa_class.php");
			$pag = new CadastrarMesa();
			
		} elseif($fun == "alterar"){
			include_once("controle/mesa/AlterarMesa_class.php");
			$pag = new AlterarMesa();
			
		} elseif($fun == "excluir"){
			include_once("controle/mesa/ExcluirMesa_class.php");
			$pag = new ExcluirMesa();
			
		} elseif($fun == "listar"){
			include_once("controle/mesa/ListarMesa_class.php");
			$pag = new ListarMesa();
			
		} elseif($fun == "exibir") {
			include_once("controle/mesa/ExibirMesa_class.php");
			$pag = new ExibirMesa();
			
		} else {
			include_once("controle/mesa/ListarMesa_class.php");
			$pag = new ListarMesa();			
		}
			
	} else {
		include_once("controle/mesa/ListarMesa_class.php");
		$pag = new ListarMesa();
	}
	
include_once("visao/base.php");

?>
