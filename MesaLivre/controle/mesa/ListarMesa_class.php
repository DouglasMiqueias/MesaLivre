<?php
	include_once("modelo/mesa/MesaDAO_class.php");
	
	class ListarMesa{

		public function __construct(){
			$dao = new MesaDAO();
			$lista = $dao->listar();
			
			include_once("visao/mesa/listaMesa.php");		
		}
	}
?>
