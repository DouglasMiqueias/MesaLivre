<?php
class Reserva{
    private $id_reserva;
    private $id_cliente;
    private $id_mesa;
    private $data_reserva;
    private $hora_inicio;
    private $hora_fim;
    private $numero_pessoas;
    private $status;
    private $observacoes;
    
    public function __construct() {}
    
    public function getIdReserva(){
        return $this->id_reserva;
    }
    public function setIdReserva($id_reserva){
        $this->id_reserva = $id_reserva;
    }
    
    public function getIdCliente(){
        return $this->id_cliente;
    }
    public function setIdCliente($id_cliente){
        $this->id_cliente = $id_cliente;
    }
    
    public function getIdMesa(){
        return $this->id_mesa;
    }
    public function setIdMesa($id_mesa){
        $this->id_mesa = $id_mesa;
    }
    
    public function getDataReserva(){
        return $this->data_reserva;
    }
    public function setDataReserva($data_reserva){
        $this->data_reserva = $data_reserva;
    }
    
    public function getHoraInicio(){
        return $this->hora_inicio;
    }
    public function setHoraInicio($hora_inicio){
        $this->hora_inicio = $hora_inicio;
    }
    
    public function getHoraFim(){
        return $this->hora_fim;
    }
    public function setHoraFim($hora_fim){
        $this->hora_fim = $hora_fim;
    }
    
    public function getNumeroPessoas(){
        return $this->numero_pessoas;
    }
    public function setNumeroPessoas($numero_pessoas){
        $this->numero_pessoas = $numero_pessoas;
    }
    
    public function getStatus(){
        return $this->status;
    }
    public function setStatus($status){
        $this->status = $status;
    }
    
    public function getObservacoes(){
        return $this->observacoes;
    }
    public function setObservacoes($observacoes){
        $this->observacoes = $observacoes;
    }
}

