<?php
	include_once("modelo/mesa/MesaDAO_class.php");
	
	class ExibirMesa{

		public function __construct(){
			$dao = new MesaDAO();
			$m = $dao->exibir($_GET["id"]);
			
			include_once("visao/mesa/exibeMesa.php");
		}
	}
?>
