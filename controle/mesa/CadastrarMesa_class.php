<?php
include_once("modelo/mesa/MesaDAO_class.php");

class CadastrarMesa {
    
    public function __construct() {
        
        if(isset($_POST["enviar"])) {
            
            $m = new Mesa();
            $m->setNumero($_POST["numero"]);
            $m->setCapacidade($_POST["capacidade"]);
            $m->setLocalizacao($_POST["localizacao"]);
            $m->setStatus($_POST["status"]);
            $m->setDescricao($_POST["descricao"]);
            
            $dao = new MesaDAO();
            $dao->cadastrar($m);
            
            $status = "Cadastro da Mesa " . $m->getNumero() . " efetuado com sucesso!";
            echo "<h3>$status</h3>";
            echo "<br><a href='mesa.php?fun=cadastrar'>Cadastrar outra</a>";
            
        } else {
            include_once("visao/mesa/FormCadastroMesa_class.php");	
        }
    }
}
?>
