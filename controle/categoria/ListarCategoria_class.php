<?php
include_once("modelo/categoria/CategoriaDAO_class.php");

class ListarCategoria{
    public function __construct(){
        $dao = new CategoriaDAO();
        $lista = $dao->listar();
        include_once("visao/categoria/listaCategoria.php");
    }
}
?>
