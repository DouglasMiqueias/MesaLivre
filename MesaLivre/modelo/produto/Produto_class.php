<?php
class Produto{
    private $id_produto;
    private $nome;
    private $descricao;
    private $preco;
    private $categoria;
    private $estoque;
    private $data_cadastro;

    public function __construct() {}   

    public function getIdProduto(){
        return $this->id_produto;
    }
    public function setIdProduto($id_produto){
        $this->id_produto = $id_produto;
    }

    public function getNome(){
        return $this->nome;
    }
    public function setNome($nome){
        $this->nome = $nome;
    }

    public function getDescricao(){
        return $this->descricao;
    }
    public function setDescricao($descricao){
        $this->descricao = $descricao;
    }

    public function getPreco(){
        return $this->preco;
    }
    public function setPreco($preco){
        $this->preco = $preco;
    }

    public function getCategoria(){
        return $this->categoria;
    }
    public function setCategoria($categoria){
        $this->categoria = $categoria;
    }

    public function getEstoque(){
        return $this->estoque;
    }
    public function setEstoque($estoque){
        $this->estoque = $estoque;
    }

    public function getDataCadastro(){
        return $this->data_cadastro;
    }
    public function setDataCadastro($data_cadastro){
        $this->data_cadastro = $data_cadastro;
    }
}
?>