<?php
include_once "ConnectionFactory_class.php";
include_once "Produto_class.php";

class ProdutoDAO {

    public function cadastrar(Produto $prod){
        try{
            $fabrica = new ConnectionFactory();
            $con = $fabrica->getConnection();
            
            $stmt = $con->prepare("INSERT INTO produtos (nome, descricao, preco, categoria, estoque, data_cadastro) VALUES (:nome, :descricao, :preco, :categoria, :estoque, :data_cadastro)");

            $stmt->bindValue(':nome', $prod->getNome());
            $stmt->bindValue(':descricao', $prod->getDescricao());
            $stmt->bindValue(':preco', $prod->getPreco());
            $stmt->bindValue(':categoria', $prod->getCategoria());
            $stmt->bindValue(':estoque', $prod->getEstoque());
            $stmt->bindValue(':data_cadastro', $prod->getDataCadastro());
            
            $stmt->execute();
            $fabrica->close();
        } catch (PDOException $ex){
            echo "Erro ao cadastrar produto: " . $ex->getMessage();
        }
    }

    public function listar(){
        try{
            $fabrica = new ConnectionFactory();
            $con = $fabrica->getConnection();
            
            $stmt = $con->prepare("SELECT * FROM produtos");
            $stmt->execute();
            
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
            $fabrica->close();
            return $result;
        } catch (PDOException $ex){
            echo "Erro ao listar produtos: " . $ex->getMessage();
        }
    }

    public function alterar(Produto $prod) {
        try {
            $fabrica = new ConnectionFactory();
            $con = $fabrica->getConnection();
            
            $stmt = $con->prepare("UPDATE produtos SET nome = :nome, descricao = :descricao, preco = :preco, categoria = :categoria, estoque = :estoque, data_cadastro = :data_cadastro WHERE id_produto = :id_produto");
            
            $stmt->bindValue(':nome', $prod->getNome());
            $stmt->bindValue(':descricao', $prod->getDescricao());
            $stmt->bindValue(':preco', $prod->getPreco());
            $stmt->bindValue(':categoria', $prod->getCategoria());
            $stmt->bindValue(':estoque', $prod->getEstoque());
            $stmt->bindValue(':data_cadastro', $prod->getDataCadastro());
            $stmt->bindValue(':id_produto', $prod->getIdProduto());
            
            $stmt->execute();
            $fabrica->close();
        } catch (PDOException $ex) {
            echo "Erro ao alterar produto: " . $ex->getMessage();
        }
    }

    public function excluir(Produto $prod) {
        try {
            $fabrica = new ConnectionFactory();
            $con = $fabrica->getConnection();
            
            $stmt = $con->prepare("DELETE FROM produtos WHERE id_produto = :id_produto");
            
            $stmt->bindValue(':id_produto', $prod->getIdProduto());
            
            $stmt->execute();
            $fabrica->close();
        } catch (PDOException $ex) {
            echo "Erro ao excluir produto: " . $ex->getMessage();
        }
    }

    public function exibir($id) {
        try {
            $fabrica = new ConnectionFactory();
            $con = $fabrica->getConnection();
            
            $stmt = $con->prepare("SELECT * FROM produtos WHERE id_produto = :id");
            $stmt->bindValue(':id', $id);
            $stmt->execute();
            
            $dado = $stmt->fetchAll(PDO::FETCH_ASSOC);
            $fabrica->close();
            
            $p = new Produto();
            $p->setIdProduto($dado[0]["id_produto"]);
            $p->setNome($dado[0]["nome"]);
            $p->setDescricao($dado[0]["descricao"]);
            $p->setPreco($dado[0]["preco"]);
            $p->setCategoria($dado[0]["categoria"]);
            $p->setEstoque($dado[0]["estoque"]);
            $p->setDataCadastro($dado[0]["data_cadastro"]);
            
            return $p;
        } catch (PDOException $ex) {
            echo "Erro ao exibir produto: " . $ex->getMessage();
        }
    }
}
?>