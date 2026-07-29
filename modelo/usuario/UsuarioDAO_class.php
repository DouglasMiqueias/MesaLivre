<?php
include_once("ConnectionFactory_class.php");
include_once("Usuario_class.php");

class UsuarioDAO{
	public $con = null;
	
	public function __construct(){
		$conF = new ConnectionFactory();
		$this->con = $conF->getConnection();
	}
	
	public function autenticar($email, $senha){
		try{
			$stmt = $this->con->prepare(
				"SELECT * FROM usuarios WHERE email = :email AND senha = :senha"
			);
			
			$stmt->bindValue(":email", $email);
			$stmt->bindValue(":senha", md5($senha));
			
			$stmt->execute();
			
			$resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);
			
			if(count($resultado) > 0){
				$u = new Usuario();
				$u->setIdUsuario($resultado[0]["id_usuario"]);
				$u->setNome($resultado[0]["nome"]);
				$u->setEmail($resultado[0]["email"]);
				$u->setTipo($resultado[0]["tipo"]);
				
				return $u;
			} else {
				return null;
			}
			
		} catch(PDOException $ex){
			echo "Erro ao autenticar: " . $ex->getMessage();
			return null;
		}
	}
	
	public function cadastrar(Usuario $u){
		try{
			$stmt = $this->con->prepare(
				"INSERT INTO usuarios (nome, email, senha, tipo) 
				VALUES (:nome, :email, :senha, :tipo)"
			);
			
			$stmt->bindValue(":nome", $u->getNome());
			$stmt->bindValue(":email", $u->getEmail());
			$stmt->bindValue(":senha", md5($u->getSenha()));
			$stmt->bindValue(":tipo", $u->getTipo());
			
			$stmt->execute();
			
		} catch(PDOException $ex){
			echo "Erro ao cadastrar usuário: " . $ex->getMessage();
		}
	}
	
	public function listar(){
		try{
			$stmt = $this->con->prepare("SELECT * FROM usuarios");
			$stmt->execute();
			
			$resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);
			return $resultado;
			
		} catch(PDOException $ex){
			echo "Erro ao listar usuários: " . $ex->getMessage();
		}
	}
	
	public function emailExiste($email){
		try{
			$stmt = $this->con->prepare("SELECT COUNT(*) as total FROM usuarios WHERE email = :email");
			$stmt->bindValue(":email", $email);
			$stmt->execute();
			
			$resultado = $stmt->fetch(PDO::FETCH_ASSOC);
			return $resultado['total'] > 0;
			
		} catch(PDOException $ex){
			echo "Erro ao verificar email: " . $ex->getMessage();
			return false;
		}
	}
	
	public function __destruct(){
		$this->con = null;
	}
}
?>
