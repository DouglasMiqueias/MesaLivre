<?php
include_once("modelo/categoria/CategoriaDAO_class.php");

class CadastrarCategoria{
    public function __construct(){
        if(isset($_POST["enviar"])){
            $c = new Categoria();
            $c->setNome($_POST["nome"]);
            $c->setCor($_POST["cor"]);
            $c->setIcone($_POST["icone"]);
            $c->setAtivo($_POST["ativo"]);
            
            $dao = new CategoriaDAO();
            $dao->cadastrar($c);
            
            $status = "Categoria cadastrada com sucesso!";
            
            $lista = $dao->listar();
            include_once("visao/categoria/listaCategoria.php");
        } else {
            include_once("visao/categoria/formCadastroCategoria_class.php");
        }
    }
}
?>
