<?php
class LogoutUsuario{
	
	public function __construct(){
		session_unset();
		
		session_destroy();
		
		echo "<script type='text/javascript'> 
			alert('Logout realizado com sucesso!');
			location.href='usuario.php?fun=logar'; 
		</script>";
	}
}
?>
