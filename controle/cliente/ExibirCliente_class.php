<?php
	include_once("modelo/cliente/ClienteDAO_class.php");
	
	class ExibirCliente{
	
		public function __construct(){
			$dao = new ClienteDAO();
			$c = $dao->exibir($_GET["id"]);
			
			include_once("visao/cliente/exibeCliente.php");
		}
	}
?>
