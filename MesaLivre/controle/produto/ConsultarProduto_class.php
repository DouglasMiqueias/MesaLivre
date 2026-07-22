<?php
include_once("modelo/produto/ProdutoDAO_class.php");

class ConsultarProduto{
    public function __construct(){
        $dao = new ProdutoDAO();
        include_once("visao/produto/consultarProduto.php");
    }
}
?>
