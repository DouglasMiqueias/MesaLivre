<?php
include_once("modelo/usuario/UsuarioDAO_class.php");

class LoginUsuario{
	
	public function __construct(){
		
		if(isset($_POST["entrar"])){
			$email = $_POST["email"];
			$senha = $_POST["senha"];
			
			$dao = new UsuarioDAO();
			$usuario = $dao->autenticar($email, $senha);
			
			if($usuario != null){
				$_SESSION['usuario'] = serialize($usuario);
				$_SESSION['logado'] = true;
				$_SESSION['tipo'] = $usuario->getTipo();
				
				header("Location: index.php");
				exit();
				
			} else {
				$erro = "Email ou senha incorretos!";
				include_once("visao/usuario/formLogin.php");
			}
			
		} else {
			include_once("visao/usuario/formLogin.php");
		}
	}
}
?>
