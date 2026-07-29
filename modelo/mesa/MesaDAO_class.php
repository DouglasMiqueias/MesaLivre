<?php
include_once "ConnectionFactory_class.php";
include_once "Mesa_class.php";

class MesaDAO {
    public $con = null;
    
    public function __construct(){
        $conF = new ConnectionFactory();
        $this->con = $conF->getConnection();
    }

    public function cadastrar(Mesa $mesa){
        try{
            $stmt = $this->con->prepare("INSERT INTO mesas (numero, capacidade, localizacao, status, descricao) VALUES (:numero, :capacidade, :localizacao, :status, :descricao)");

            $stmt->bindValue(':numero', $mesa->getNumero());
            $stmt->bindValue(':capacidade', $mesa->getCapacidade());
            $stmt->bindValue(':localizacao', $mesa->getLocalizacao());
            $stmt->bindValue(':status', $mesa->getStatus());
            $stmt->bindValue(':descricao', $mesa->getDescricao());
            
            $stmt->execute();
        } catch (PDOException $ex){
            echo "Erro ao cadastrar mesa: " . $ex->getMessage();
        }
    }

    public function listar(){
        try{
            $stmt = $this->con->prepare("SELECT * FROM mesas");
            $stmt->execute();
            
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        } catch (PDOException $ex){
            echo "Erro ao listar mesas: " . $ex->getMessage();
        }
    }

    public function alterar(Mesa $mesa) {
        try {
            $stmt = $this->con->prepare("UPDATE mesas SET numero = :numero, capacidade = :capacidade, localizacao = :localizacao, status = :status, descricao = :descricao WHERE id_mesa = :id_mesa");
            
            $stmt->bindValue(':numero', $mesa->getNumero());
            $stmt->bindValue(':capacidade', $mesa->getCapacidade());
            $stmt->bindValue(':localizacao', $mesa->getLocalizacao());
            $stmt->bindValue(':status', $mesa->getStatus());
            $stmt->bindValue(':descricao', $mesa->getDescricao());
            $stmt->bindValue(':id_mesa', $mesa->getIdMesa());
            
            $stmt->execute();
        } catch (PDOException $ex) {
            echo "Erro ao alterar mesa: " . $ex->getMessage();
        }
    }

    public function excluir(Mesa $mesa) {
        try {
            $stmt = $this->con->prepare("DELETE FROM mesas WHERE id_mesa = :id_mesa");
            
            $stmt->bindValue(':id_mesa', $mesa->getIdMesa());
            
            $stmt->execute();
        } catch (PDOException $ex) {
            echo "Erro ao excluir mesa: " . $ex->getMessage();
        }
    }

    public function exibir($id) {
        try {
            $stmt = $this->con->prepare("SELECT * FROM mesas WHERE id_mesa = :id");
            $stmt->bindValue(':id', $id);
            $stmt->execute();
            
            $dado = $stmt->fetchAll(PDO::FETCH_ASSOC);
            
            $m = new Mesa();
            $m->setIdMesa($dado[0]["id_mesa"]);
            $m->setNumero($dado[0]["numero"]);
            $m->setCapacidade($dado[0]["capacidade"]);
            $m->setLocalizacao($dado[0]["localizacao"]);
            $m->setStatus($dado[0]["status"]);
            $m->setDescricao($dado[0]["descricao"]);
            
            return $m;
        } catch (PDOException $ex) {
            echo "Erro ao exibir mesa: " . $ex->getMessage();
        }
    }
    
    public function __destruct(){
        $this->con = null;
    }
}
?>
