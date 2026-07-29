<?php
	include_once("modelo/produto/ProdutoDAO_class.php");
	
	class ListarProduto{

		public function __construct(){
			$dao = new ProdutoDAO();
			$lista = $dao->listar();
			
			include_once("visao/produto/listaProduto.php");		
		}
	}
?>
