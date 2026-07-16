<?php
include_once("modelo/produto/ProdutoDAO_class.php");

class CadastrarProduto {
    
    public function __construct() {
        
        if(isset($_POST["enviar"])) {
            
            $p = new Produto();
            $p->setNome($_POST["nome"]);
            $p->setDescricao($_POST["descricao"]);
            $p->setPreco($_POST["preco"]);
            $p->setCategoria($_POST["categoria"]);
            $p->setEstoque($_POST["estoque"]);
            $p->setDataCadastro($_POST["data_cadastro"]);
            
            $dao = new ProdutoDAO();
            $dao->cadastrar($p);
            
            $status = "Cadastro do Produto " . $p->getNome() . " efetuado com sucesso!";
            echo "<h3>$status</h3>";
            echo "<br><a href='produto.php?fun=cadastrar'>Cadastrar outro</a>";
            
        } else {
            include_once("visao/produto/FormCadastroProduto_class.php");	
        }
    }
}
?>
