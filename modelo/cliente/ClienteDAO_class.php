<?php
include_once "ConnectionFactory_class.php";
include_once "Cliente_class.php";

class ClienteDAO {
    public $con = null;
    
    public function __construct(){
        $conF = new ConnectionFactory();
        $this->con = $conF->getConnection();
    }
    
    public function cadastrar(Cliente $cli) {
        try {
            $stmt = $this->con->prepare("INSERT INTO clientes (nome, telefone, endereco, bairro, observacoes, data_cadastro) VALUES (:nome, :telefone, :endereco, :bairro, :observacoes, :data_cadastro)");
            
            $stmt->bindValue(':nome', $cli->getNome());
            $stmt->bindValue(':telefone', $cli->getTelefone());
            $stmt->bindValue(':endereco', $cli->getEndereco());
            $stmt->bindValue(':bairro', $cli->getBairro());
            $stmt->bindValue(':observacoes', $cli->getObservacoes());
            $stmt->bindValue(':data_cadastro', $cli->getDataCadastro());
            
            $stmt->execute();
        } catch (PDOException $ex) {
            echo "Erro ao cadastrar cliente: " . $ex->getMessage();
        }
    }

    public function listar() {
        try {
            $stmt = $this->con->prepare("SELECT * FROM clientes");
            $stmt->execute();
            
            $resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);
            
            return $resultado;
        } catch (PDOException $ex) {
            echo "Erro ao listar clientes: " . $ex->getMessage();
        }
    }
    public function alterar(Cliente $cli) {
        try {
            $stmt = $this->con->prepare("UPDATE clientes SET nome = :nome, telefone = :telefone, endereco = :endereco, bairro = :bairro, observacoes = :observacoes, data_cadastro = :data_cadastro WHERE id_cliente = :id_cliente");
            
            $stmt->bindValue(':nome', $cli->getNome());
            $stmt->bindValue(':telefone', $cli->getTelefone());
            $stmt->bindValue(':endereco', $cli->getEndereco());
            $stmt->bindValue(':bairro', $cli->getBairro());
            $stmt->bindValue(':observacoes', $cli->getObservacoes());
            $stmt->bindValue(':data_cadastro', $cli->getDataCadastro());
            $stmt->bindValue(':id_cliente', $cli->getIdCliente());
            
            $stmt->execute();
        } catch (PDOException $ex) {
            echo "Erro ao alterar cliente: " . $ex->getMessage();
        }
    }

    public function excluir(Cliente $cli) {
        try {
            $stmt = $this->con->prepare("DELETE FROM clientes WHERE id_cliente = :id_cliente");
            
            $stmt->bindValue(':id_cliente', $cli->getIdCliente());
            
            $stmt->execute();
        } catch (PDOException $ex) {
            echo "Erro ao excluir cliente: " . $ex->getMessage();
        }
    }

    public function exibir($id) {
        try {
            $stmt = $this->con->prepare("SELECT * FROM clientes WHERE id_cliente = :id");
            $stmt->bindValue(':id', $id);
            $stmt->execute();
            
            $dado = $stmt->fetchAll(PDO::FETCH_ASSOC);
            
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

    public function buscarPorNome($nome){
        try{
            $stmt = $this->con->prepare("SELECT * FROM clientes WHERE nome LIKE :nome");
            $stmt->bindValue(':nome', '%' . $nome . '%');
            $stmt->execute();
            
            $dado = $stmt->fetchAll(PDO::FETCH_ASSOC);
            
            return $dado;
        } catch (PDOException $ex) {
            echo "Erro ao buscar cliente por nome: " . $ex->getMessage();
        }
    }
    
    public function __destruct(){
        $this->con = null;
    }
}
?>
