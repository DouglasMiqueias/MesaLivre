<?php
include_once("modelo/categoria/CategoriaDAO_class.php");

class ExibirCategoria{
    public function __construct(){
        $dao = new CategoriaDAO();
        $c = $dao->exibir($_GET["id"]);
        include_once("visao/categoria/formExibeCategoria.php");
    }
}
?>
