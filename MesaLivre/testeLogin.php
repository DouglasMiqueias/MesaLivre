<?php
include_once("modelo/usuario/ConnectionFactory_class.php");
include_once("modelo/usuario/UsuarioDAO_class.php");

$dao = new UsuarioDAO();
$usuario = $dao->autenticar("iftm@mesalivre.com", "test");

if($usuario != null){
    echo " Login funcionando! Usuário: " . $usuario->getNome();
} else {
    echo " Falha no login. Verifique email/senha.";
}
?>