<?php
include_once "ConnectionFactory_class.php";
include_once "Cliente_class.php";

class ClienteDAO {
    
    public function cadastrar(Cliente $cli) {
        try {
            $fabrica = new ConnectionFactory();
            $con = $fabrica->getConnection();
            
            $stmt = $con->prepare("INSERT INTO clientes (nome, telefone, endereco, bairro, observacoes, data_cadastro) VALUES (:nome, :telefone, :endereco, :bairro, :observacoes, :data_cadastro)");
            
            $stmt->bindValue(':nome', $cli->getNome());
            $stmt->bindValue(':telefone', $cli->getTelefone());
            $stmt->bindValue(':endereco', $cli->getEndereco());
            $stmt->bindValue(':bairro', $cli->getBairro());
            $stmt->bindValue(':observacoes', $cli->getObservacoes());
            $stmt->bindValue(':data_cadastro', $cli->getDataCadastro());
            
            $stmt->execute();
            $fabrica->close();
        } catch (PDOException $ex) {
            echo "Erro ao cadastrar cliente: " . $ex->getMessage();
        }
    }

    public function listar() {
        try {
            $fabrica = new ConnectionFactory();
            $con = $fabrica->getConnection();
            
            $stmt = $con->prepare("SELECT * FROM clientes");
            $stmt->execute();
            
            $resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);
            $fabrica->close();
            
            return $resultado;
        } catch (PDOException $ex) {
            echo "Erro ao listar clientes: " . $ex->getMessage();
        }
    }
    public function alterar(Cliente $cli) {
        try {
            $fabrica = new ConnectionFactory();
            $con = $fabrica->getConnection();
            
            $stmt = $con->prepare("UPDATE clientes SET nome = :nome, telefone = :telefone, endereco = :endereco, bairro = :bairro, observacoes = :observacoes, data_cadastro = :data_cadastro WHERE id_cliente = :id_cliente");
            
            $stmt->bindValue(':nome', $cli->getNome());
            $stmt->bindValue(':telefone', $cli->getTelefone());
            $stmt->bindValue(':endereco', $cli->getEndereco());
            $stmt->bindValue(':bairro', $cli->getBairro());
            $stmt->bindValue(':observacoes', $cli->getObservacoes());
            $stmt->bindValue(':data_cadastro', $cli->getDataCadastro());
            $stmt->bindValue(':id_cliente', $cli->getIdCliente());
            
            $stmt->execute();
            $fabrica->close();
        } catch (PDOException $ex) {
            echo "Erro ao alterar cliente: " . $ex->getMessage();
        }
    }

    public function excluir(Cliente $cli) {
        try {
            $fabrica = new ConnectionFactory();
            $con = $fabrica->getConnection();
            
            $stmt = $con->prepare("DELETE FROM clientes WHERE id_cliente = :id_cliente");
            
            $stmt->bindValue(':id_cliente', $cli->getIdCliente());
            
            $stmt->execute();
            $fabrica->close();
        } catch (PDOException $ex) {
            echo "Erro ao excluir cliente: " . $ex->getMessage();
        }
    }

    public function exibir($id) {
        try {
            $fabrica = new ConnectionFactory();
            $con = $fabrica->getConnection();
            
            $stmt = $con->prepare("SELECT * FROM clientes WHERE id_cliente = :id");
            $stmt->bindValue(':id', $id);
            $stmt->execute();
            
            $dado = $stmt->fetchAll(PDO::FETCH_ASSOC);
            $fabrica->close();
            
            $c = new Cliente();
            $c->setIdCliente($dado[0]["id_cliente"]);
            $c->setNome($dado[0]["nome"]);
            $c->setTelefone($dado[0]["telefone"]);
            $c->setEndereco($dado[0]["endereco"]);
            $c->setBairro($dado[0]["bairro"]);
            $c->setObservacoes($dado[0]["observacoes"]);
            $c->setDataCadastro($dado[0]["data_cadastro"]);
            
            return $c;
        } catch (PDOException $ex) {
            echo "Erro ao exibir cliente: " . $ex->getMessage();
        }
    }
}
?>
