<?php
include_once("modelo/cliente/ClienteDAO_class.php");

class AlterarCliente{
    public function __construct(){
        if((isset($_POST["enviar"]))){

            $c = new Cliente();
            $c->setIdCliente($_POST["id_cliente"]);
            $c->setNome($_POST["nome"]);
            $c->setTelefone($_POST["telefone"]);
            $c->setEndereco($_POST["endereco"]);
            $c->setBairro($_POST["bairro"]);
            $c->setObservacoes($_POST["observacoes"]);
            $c->setDataCadastro($_POST["data_cadastro"]);

            $dao = new ClienteDAO();
            $dao->alterar($c);

            $status = "Cliente " . $c->getNome() . " alterado com sucesso!";
            
            $lista = $dao->listar();
            include_once("visao/cliente/listaCliente.php");            
        } else {
            $dao = new ClienteDAO();
            $c = $dao->exibir($_GET["id"]);
            include_once("visao/cliente/formAlteraCliente.php");
        }
    }
}
?>
