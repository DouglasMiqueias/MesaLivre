<?php
include_once("modelo/mesa/MesaDAO_class.php");

class AlterarMesa{
    public function __construct(){
        if((isset($_POST["enviar"]))){

            $m = new Mesa();
            $m->setIdMesa($_POST["id_mesa"]);
            $m->setNumero($_POST["numero"]);
            $m->setCapacidade($_POST["capacidade"]);
            $m->setLocalizacao($_POST["localizacao"]);
            $m->setStatus($_POST["status"]);
            $m->setDescricao($_POST["descricao"]);

            $dao = new MesaDAO();
            $dao->alterar($m);

            $status = "Mesa " . $m->getNumero() . " alterada com sucesso!";
            
            $lista = $dao->listar();
            include_once("visao/mesa/listaMesa.php");            
        } else {
            $dao = new MesaDAO();
            $m = $dao->exibir($_GET["id"]);
            include_once("visao/mesa/formAlteraMesa.php");
        }
    }
}
?>
