<?php
session_start();

	if(isset($_GET["fun"])){
		$fun = $_GET["fun"];
		
		if($fun == "logar"){
			if(isset($_SESSION['logado']) && $_SESSION['logado'] == true){
				header("Location: index.php");
				exit();
			}
			
			include_once("visao/topo.php");
			include_once("controle/usuario/LoginUsuario_class.php");
			$pag = new LoginUsuario();
			include_once("visao/base.php");
			
		} elseif($fun == "logout"){
			include_once("controle/usuario/LogoutUsuario_class.php");
			$pag = new LogoutUsuario();
			
		} else {
			if(isset($_SESSION['logado']) && $_SESSION['logado'] == true){
				header("Location: index.php");
			} else {
				header("Location: usuario.php?fun=logar");
			}
			exit();
		}
			
	} else {
		if(isset($_SESSION['logado']) && $_SESSION['logado'] == true){
			header("Location: index.php");
		} else {
			header("Location: usuario.php?fun=logar");
		}
		exit();
	}

?>
