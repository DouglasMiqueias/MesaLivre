<?php
class Mesa{
    private $id_mesa;
    private $numero;
    private $capacidade;
    private $localizacao;
    private $status;
    private $descricao;

    public function __construct() {}   

    public function getIdMesa(){
        return $this->id_mesa;
    }
    public function setIdMesa($id_mesa){
        $this->id_mesa = $id_mesa;
    }

    public function getNumero(){
        return $this->numero;
    }
    public function setNumero($numero){
        $this->numero = $numero;
    }

    public function getCapacidade(){
        return $this->capacidade;
    }
    public function setCapacidade($capacidade){
        $this->capacidade = $capacidade;
    }

    public function getLocalizacao(){
        return $this->localizacao;
    }
    public function setLocalizacao($localizacao){
        $this->localizacao = $localizacao;
    }

    public function getStatus(){
        return $this->status;
    }
    public function setStatus($status){
        $this->status = $status;
    }

    public function getDescricao(){
        return $this->descricao;
    }
    public function setDescricao($descricao){
        $this->descricao = $descricao;
    }
}
?>
