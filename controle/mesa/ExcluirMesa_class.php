<?php
	include_once("modelo/mesa/MesaDAO_class.php");
	
	class ExcluirMesa{

		public function __construct(){
			
			if(isset($_GET["op"])){
				$op = $_GET["op"];
				
				if($op == "sim"){
					$m = new Mesa();
					$m->setIdMesa($_GET["id"]);
					
					$dao = new MesaDAO();
					$dao->excluir($m);
					
					$status = "Mesa excluída com sucesso!";
					
					$lista = $dao->listar();
					include_once("visao/mesa/listaMesa.php");
				} else {
					echo "<script type='text/javascript'> location.href='mesa.php?fun=listar'; </script>";
				}
				
			} else {
				include_once("visao/mesa/pagAutorizaExcluir.php");
			}
		}
	}
?>
