<?php
	include_once("modelo/cliente/ClienteDAO_class.php");
	
	class ExcluirCliente{
	
		public function __construct(){
			
			if(isset($_GET["op"])){
				$op = $_GET["op"];
				
				if($op == "sim"){
					$c = new Cliente();
					$c->setIdCliente($_GET["id"]);
					
					$dao = new ClienteDAO();
					$dao->excluir($c);
					
					$status = "Cliente excluído com sucesso!";
					
					$lista = $dao->listar();
					include_once("visao/cliente/listaCliente.php");
				} else {
					echo "<script type='text/javascript'> location.href='cliente.php?fun=listar'; </script>";
				}
				
			} else {
				include_once("visao/cliente/pagAutorizaExcluir.php");
			}
		}
	}
?>
