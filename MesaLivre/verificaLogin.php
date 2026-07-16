<?php

if(!isset($_SESSION['logado']) || $_SESSION['logado'] != true){
	echo "<script type='text/javascript'> 
		alert('Você precisa fazer login para acessar esta página!');
		location.href='../landing.php'; 
	</script>";
	exit();
}
?>
