<?php
include_once "ConnectionFactory_class.php";
include_once "Categoria_class.php";

class CategoriaDAO {
    public $con = null;
    
    public function __construct(){
        $conF = new ConnectionFactory();
        $this->con = $conF->getConnection();
    }

    public function cadastrar(Categoria $categoria){
        try{
            $stmt = $this->con->prepare("INSERT INTO categorias (nome, cor, icone, ativo) VALUES (:nome, :cor, :icone, :ativo)");
            $stmt->bindValue(':nome', $categoria->getNome());
            $stmt->bindValue(':cor', $categoria->getCor());
            $stmt->bindValue(':icone', $categoria->getIcone());
            $stmt->bindValue(':ativo', $categoria->getAtivo());

            $stmt->execute();
        } catch (PDOException $e) {
            echo "Erro ao cadastrar categoria: " . $e->getMessage();
        }
    }

    public function listar(){
        try{
            $stmt = $this->con->prepare("SELECT * FROM categorias WHERE ativo = 1 ORDER BY nome ASC");
            $stmt->execute();

            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        } catch (PDOException $ex){
            echo "Erro ao listar categorias: " . $ex->getMessage();
            return [];
        }
    }

    public function buscarPorID($id){
        try{
            $stmt = $this->con->prepare("SELECT * FROM categorias WHERE id_categoria = :id");
            $stmt->bindValue(':id', $id);
            $stmt->execute();

            $dado = $stmt->fetchAll(PDO::FETCH_ASSOC);

            if(count($dado) > 0){
                $c = new Categoria();
                $c->setIdCategoria($dado[0]["id_categoria"]);
                $c->setNome($dado[0]["nome"]);
                $c->setCor($dado[0]["cor"]);
                $c->setIcone($dado[0]["icone"]);
                $c->setAtivo($dado[0]["ativo"]);
                return $c;
            }
            return null;
        } catch (PDOException $ex){
            echo "Erro ao buscar categoria por ID: " . $ex->getMessage();
            return null;
        }
    }

    public function buscarPorNome($nome){
        try{
            $stmt = $this->con->prepare("SELECT * FROM categorias WHERE nome LIKE :nome AND ativo = 1");
            $stmt->bindValue(':nome', '%' . $nome . '%');
            $stmt->execute();

            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        } catch (PDOException $ex){
            echo "Erro ao buscar categorias por nome: " . $ex->getMessage();
            return [];
        }
    }

    public function exibir($id){
        try{
            $stmt = $this->con->prepare("SELECT * FROM categorias WHERE id_categoria = :id");
            $stmt->bindValue(':id', $id);
            $stmt->execute();

            $dado = $stmt->fetchAll(PDO::FETCH_ASSOC);

            if(count($dado) > 0){
                $c = new Categoria();
                $c->setIdCategoria($dado[0]["id_categoria"]);
                $c->setNome($dado[0]["nome"]);
                $c->setCor($dado[0]["cor"]);
                $c->setIcone($dado[0]["icone"]);
                $c->setAtivo($dado[0]["ativo"]);
                return $c;
            }
            return null;
        } catch (PDOException $ex){
            echo "Erro ao exibir categoria: " . $ex->getMessage();
            return null;
        }
    }

    public function alterar(Categoria $categoria){
        try{
            $stmt = $this->con->prepare("UPDATE categorias SET nome = :nome, cor = :cor, icone = :icone, ativo = :ativo WHERE id_categoria = :id_categoria");
            $stmt->bindValue(':nome', $categoria->getNome());
            $stmt->bindValue(':cor', $categoria->getCor());
            $stmt->bindValue(':icone', $categoria->getIcone());
            $stmt->bindValue(':ativo', $categoria->getAtivo());
            $stmt->bindValue(':id_categoria', $categoria->getIdCategoria());

            $stmt->execute();
        } catch (PDOException $e) {
            echo "Erro ao alterar categoria: " . $e->getMessage();
        }
    }

    public function excluir(Categoria $categoria){
        try{
            $stmt = $this->con->prepare("UPDATE categorias SET ativo = 0 WHERE id_categoria = :id_categoria");
            $stmt->bindValue(':id_categoria', $categoria->getIdCategoria());
            $stmt->execute();
        } catch (PDOException $e) {
            echo "Erro ao excluir categoria: " . $e->getMessage();
        }
    }
    
    public function __destruct(){
        $this->con = null;
    }
}
?>
