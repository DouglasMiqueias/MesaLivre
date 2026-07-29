<?php
include_once("modelo/produto/ProdutoDAO_class.php");
include_once("modelo/categoria/CategoriaDAO_class.php");

class AlterarProduto{
    public function __construct(){
        if((isset($_POST["enviar"]))){

            $p = new Produto();
            $p->setIdProduto($_POST["id_produto"]);
            $p->setIdCategoria($_POST["id_categoria"]);
            $p->setNome($_POST["nome"]);
            $p->setDescricao($_POST["descricao"]);
            $p->setPreco($_POST["preco"]);
            $p->setEstoque($_POST["estoque"]);
            $p->setTempoPreparo(isset($_POST["tempo_preparo"]) ? $_POST["tempo_preparo"] : null);
            $p->setImagem(isset($_POST["imagem"]) ? $_POST["imagem"] : null);
            $p->setAtivo(isset($_POST["ativo"]) ? 1 : 0);

            $dao = new ProdutoDAO();
            $dao->alterar($p);

            $status = "Produto " . $p->getNome() . " alterado com sucesso!";
            
            $lista = $dao->listar();
            include_once("visao/produto/listaProduto.php");            
        } else {
            $dao = new ProdutoDAO();
            $p = $dao->exibir($_GET["id"]);

            $catDAO = new CategoriaDAO();
            $categorias = $catDAO->listar();

            include_once("visao/produto/formAlteraProduto.php");
        }
    }
}
?>
