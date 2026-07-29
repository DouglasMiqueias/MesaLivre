<?php

class Cliente{
    private $id_cliente;
    private $nome;
    private $telefone;
    private $endereco;
    private $bairro;
    private $observacoes;
    private $data_cadastro;

    public function __construct(){ }

    public function getIdCliente(){
        return $this->id_cliente;
    }
    public function setIdCliente($id_cliente){
        $this->id_cliente = $id_cliente;
    }

    public function getNome(){
        return $this->nome;
    }
    public function setNome($nome){
        $this->nome = $nome;
    }

    public function getTelefone(){
        return $this->telefone;
    }
    public function setTelefone($telefone){
        $this->telefone = $telefone;
    }

    public function getEndereco(){
        return $this->endereco;
    }
    public function setEndereco($endereco){
        $this->endereco = $endereco;
    }

    public function getBairro(){
        return $this->bairro;
    }
    public function setBairro($bairro){
        $this->bairro = $bairro;
    }

    public function getObservacoes(){
        return $this->observacoes;
    }
    public function setObservacoes($observacoes){
        $this->observacoes = $observacoes;
    }

    public function getDataCadastro(){
        return $this->data_cadastro;
    }
    public function setDataCadastro($data_cadastro){
        $this->data_cadastro = $data_cadastro;
    }
}

?>