<?php
include_once("modelo/cliente/ClienteDAO_class.php");

class CadastrarCliente {
    
    public function __construct() {
        
        if(isset($_POST["enviar"])) {
            
            $c = new Cliente();
            $c->setNome($_POST["nome"]);
            $c->setTelefone($_POST["telefone"]);
            $c->setEndereco($_POST["endereco"]);
            $c->setBairro($_POST["bairro"]);
            $c->setDataCadastro($_POST["data_cadastro"]);
            
            $dao = new ClienteDAO();
            $dao->cadastrar($c);
            
            $status = "Cadastro do Cliente " . $c->getNome() . " efetuado com sucesso!";
            echo "<h3>$status</h3>";
            echo "<br><a href='cliente.php?fun=cadastrar'>Cadastrar outro</a>";
            
        } else {
            include_once("visao/cliente/FormCadastroCliente_class.php");	
        }
    }
}
?>