<?php
include_once "ConnectionFactory_class.php";
include_once "Categoria_class.php";

class CategoriaDAO {

    public function listar(){
        try{
            $fabrica = new ConnectionFactory();
            $con = $fabrica->getConnection();

            $stmt = $con->prepare("SELECT * FROM categorias WHERE ativo = 1 ORDER BY nome ASC");
            $stmt->execute();

            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
            $fabrica->close();
            return $result;
        } catch (PDOException $ex){
            echo "Erro ao listar categorias: " . $ex->getMessage();
            return [];
        }
    }

    public function exibir($id){
        try{
            $fabrica = new ConnectionFactory();
            $con = $fabrica->getConnection();

            $stmt = $con->prepare("SELECT * FROM categorias WHERE id_categoria = :id");
            $stmt->bindValue(':id', $id);
            $stmt->execute();

            $dado = $stmt->fetchAll(PDO::FETCH_ASSOC);
            $fabrica->close();

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
}
?>
