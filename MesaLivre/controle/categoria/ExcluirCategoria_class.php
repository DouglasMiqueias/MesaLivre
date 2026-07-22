<?php
include_once("modelo/categoria/CategoriaDAO_class.php");

class ExcluirCategoria{
    public function __construct(){
        if(isset($_GET["op"])){
            $op = $_GET["op"];
            
            if($op == "sim"){
                $c = new Categoria();
                $c->setIdCategoria($_GET["id"]);
                
                $dao = new CategoriaDAO();
                $dao->excluir($c);
                
                $status = "Categoria excluída com sucesso!";
                
                $lista = $dao->listar();
                include_once("visao/categoria/listaCategoria.php");
            } else {
                echo "<script type='text/javascript'> location.href='categoria.php?fun=listar'; </script>";
            }
        } else {
            include_once("visao/categoria/pagAutorizaExcluir.php");
        }
    }
}
?>
