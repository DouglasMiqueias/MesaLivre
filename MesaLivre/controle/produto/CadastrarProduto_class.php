<?php
include_once("modelo/produto/ProdutoDAO_class.php");
include_once("modelo/categoria/CategoriaDAO_class.php");

class CadastrarProduto {
    
    public function __construct() {
        
        if(isset($_POST["enviar"])) {
            
            $p = new Produto();
            $p->setIdCategoria($_POST["id_categoria"]);
            $p->setNome($_POST["nome"]);
            $p->setDescricao($_POST["descricao"]);
            $p->setPreco($_POST["preco"]);
            $p->setEstoque($_POST["estoque"]);
            $p->setTempoPreparo(isset($_POST["tempo_preparo"]) ? $_POST["tempo_preparo"] : null);
            $p->setImagem(isset($_POST["imagem"]) ? $_POST["imagem"] : null);
            $p->setAtivo(isset($_POST["ativo"]) ? 1 : 0);
            
            $dao = new ProdutoDAO();
            $dao->cadastrar($p);
            
            $status = "Cadastro do Produto " . $p->getNome() . " efetuado com sucesso!";
            echo "<h3>$status</h3>";
            echo "<br><a href='produto.php?fun=cadastrar'>Cadastrar outro</a>";
            echo " | <a href='produto.php?fun=listar'>Ver lista</a>";
            
        } else {
            $catDAO = new CategoriaDAO();
            $categorias = $catDAO->listar();
            include_once("visao/produto/FormCadastroProduto_class.php");	
        }
    }
}
?>
