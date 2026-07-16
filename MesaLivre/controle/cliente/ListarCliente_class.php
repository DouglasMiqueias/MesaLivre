<?php
	include_once("modelo/cliente/ClienteDAO_class.php");
	
	class ListarCliente{
	
		public function __construct(){
			$dao = new ClienteDAO();
			$lista = $dao->listar();
			
			include_once("visao/cliente/listaCliente.php");		
		}
	}
?>
