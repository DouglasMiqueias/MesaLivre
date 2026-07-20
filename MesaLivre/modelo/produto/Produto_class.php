<?php
class Produto{
    private $id_produto;
    private $id_categoria;
    private $nome;
    private $descricao;
    private $preco;
    private $estoque;
    private $tempo_preparo;
    private $imagem;
    private $ativo;
    private $data_cadastro;
    // Campo auxiliar para exibição do nome da categoria (preenchido via JOIN)
    private $categoria_nome;

    public function __construct() {}   

    public function getIdProduto(){
        return $this->id_produto;
    }
    public function setIdProduto($id_produto){
        $this->id_produto = $id_produto;
    }

    public function getIdCategoria(){
        return $this->id_categoria;
    }
    public function setIdCategoria($id_categoria){
        $this->id_categoria = $id_categoria;
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

    public function getEstoque(){
        return $this->estoque;
    }
    public function setEstoque($estoque){
        $this->estoque = $estoque;
    }

    public function getTempoPreparo(){
        return $this->tempo_preparo;
    }
    public function setTempoPreparo($tempo_preparo){
        $this->tempo_preparo = $tempo_preparo;
    }

    public function getImagem(){
        return $this->imagem;
    }
    public function setImagem($imagem){
        $this->imagem = $imagem;
    }

    public function getAtivo(){
        return $this->ativo;
    }
    public function setAtivo($ativo){
        $this->ativo = $ativo;
    }

    public function getDataCadastro(){
        return $this->data_cadastro;
    }
    public function setDataCadastro($data_cadastro){
        $this->data_cadastro = $data_cadastro;
    }

    public function getCategoriaNome(){
        return $this->categoria_nome;
    }
    public function setCategoriaNome($categoria_nome){
        $this->categoria_nome = $categoria_nome;
    }
}
?>