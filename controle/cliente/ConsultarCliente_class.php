<?php
include_once("modelo/cliente/ClienteDAO_class.php");

class ConsultarCliente{
    public $resultado;

    public function __construct(){
        $dao = new ClienteDAO();

        $this->resultado = [];

        if(isset($_POST['enviar'])){
            $termo = $_POST['termo'];
            $this->resultado = $dao->buscarPorNome($termo);
        }
        include_once("visao/cliente/consultarCliente.php");
    }
}
?>
