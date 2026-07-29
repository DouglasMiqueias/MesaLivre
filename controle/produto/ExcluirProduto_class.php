<?php
	include_once("modelo/produto/ProdutoDAO_class.php");
	
	class ExcluirProduto{

		public function __construct(){
			
			if(isset($_GET["op"])){
				$op = $_GET["op"];
				
				if($op == "sim"){
					$p = new Produto();
					$p->setIdProduto($_GET["id"]);
					
					$dao = new ProdutoDAO();
					$dao->excluir($p);
					
					$status = "Produto excluído com sucesso!";
					
					$lista = $dao->listar();
					include_once("visao/produto/listaProduto.php");
				} else {
					echo "<script type='text/javascript'> location.href='produto.php?fun=listar'; </script>";
				}
				
			} else {
				include_once("visao/produto/pagAutorizaExcluir.php");
			}
		}
	}
?>
