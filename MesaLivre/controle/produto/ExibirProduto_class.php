<?php
	include_once("modelo/produto/ProdutoDAO_class.php");
	
	class ExibirProduto{

		public function __construct(){
			$dao = new ProdutoDAO();
			$p = $dao->exibir($_GET["id"]);
			
			include_once("visao/produto/exibeProduto.php");
		}
	}
?>
