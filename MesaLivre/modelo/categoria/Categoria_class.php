<?php
class Categoria{
    private $id_categoria;
    private $nome;
    private $cor;
    private $icone;
    private $ativo;

    public function __construct() {}

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

    public function getCor(){
        return $this->cor;
    }
    public function setCor($cor){
        $this->cor = $cor;
    }

    public function getIcone(){
        return $this->icone;
    }
    public function setIcone($icone){
        $this->icone = $icone;
    }

    public function getAtivo(){
        return $this->ativo;
    }
    public function setAtivo($ativo){
        $this->ativo = $ativo;
    }
}
?>
