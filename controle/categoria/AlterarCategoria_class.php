<?php
include_once("modelo/categoria/CategoriaDAO_class.php");

class AlterarCategoria{
    public function __construct(){
        if(isset($_POST["enviar"])){
            $c = new Categoria();
            $c->setIdCategoria($_POST["id_categoria"]);
            $c->setNome($_POST["nome"]);
            $c->setCor($_POST["cor"]);
            $c->setIcone($_POST["icone"]);
            $c->setAtivo($_POST["ativo"]);
            
            $dao = new CategoriaDAO();
            $dao->alterar($c);
            
            $status = "Categoria alterada com sucesso!";
            
            $lista = $dao->listar();
            include_once("visao/categoria/listaCategoria.php");
        } else {
            $dao = new CategoriaDAO();
            $c = $dao->exibir($_GET["id"]);
            include_once("visao/categoria/formAlteraCategoria.php");
        }
    }
}
?>
