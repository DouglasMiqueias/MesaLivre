<?php
include_once("modelo/produto/ProdutoDAO_class.php");

class AlterarProduto{
    public function __construct(){
        if((isset($_POST["enviar"]))){

            $p = new Produto();
            $p->setIdProduto($_POST["id_produto"]);
            $p->setNome($_POST["nome"]);
            $p->setDescricao($_POST["descricao"]);
            $p->setPreco($_POST["preco"]);
            $p->setCategoria($_POST["categoria"]);
            $p->setEstoque($_POST["estoque"]);
            $p->setDataCadastro($_POST["data_cadastro"]);

            $dao = new ProdutoDAO();
            $dao->alterar($p);

            $status = "Produto " . $p->getNome() . " alterado com sucesso!";
            
            $lista = $dao->listar();
            include_once("visao/produto/listaProduto.php");            
        } else {
            $dao = new ProdutoDAO();
            $p = $dao->exibir($_GET["id"]);
            include_once("visao/produto/formAlteraProduto.php");
        }
    }
}
?>
