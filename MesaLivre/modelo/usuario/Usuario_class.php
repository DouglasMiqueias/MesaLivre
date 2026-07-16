<?php
class Usuario{
	private $id_usuario;
	private $nome;
	private $email;
	private $senha;
	private $tipo;
	
	public function __construct(){
	}
	
	public function getIdUsuario(){
		return $this->id_usuario;
	}
	public function setIdUsuario($id){
		$this->id_usuario = $id;
	}
	
	public function getNome(){
		return $this->nome;
	}
	public function setNome($nome){
		$this->nome = $nome;
	}
	
	public function getEmail(){
		return $this->email;
	}
	public function setEmail($email){
		$this->email = $email;
	}
	
	public function getSenha(){
		return $this->senha;
	}
	public function setSenha($senha){
		$this->senha = $senha;
	}
	
	public function getTipo(){
		return $this->tipo;
	}
	public function setTipo($tipo){
		$this->tipo = $tipo;
	}
}
?>
