<?php
include_once("modelo/categoria/CategoriaDAO_class.php");

class ConsultarCategoria{
    public function __construct(){
        $dao = new CategoriaDAO();
        include_once("visao/categoria/consultarCategoria.php");
    }
}
?>
