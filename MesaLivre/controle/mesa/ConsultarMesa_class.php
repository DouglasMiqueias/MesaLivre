<?php
include_once("modelo/mesa/MesaDAO_class.php");

class ConsultarMesa{
    public function __construct(){
        $dao = new MesaDAO();
        include_once("visao/mesa/consultarMesa.php");
    }
}
?>
