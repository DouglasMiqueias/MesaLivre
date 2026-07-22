<?php
include_once("modelo/produto/ProdutoDAO_class.php");

class BuscarProduto {

    public function __construct() {
        $dao = new ProdutoDAO();

        // Busca por ID via GET ?id=X
        if(isset($_GET["id"]) && is_numeric($_GET["id"])) {
            $p = $dao->buscarPorId((int)$_GET["id"]);

            if($p !== null){
                include_once("visao/produto/exibeProduto.php");
            } else {
                echo "<div class='status' style='background:#f8d7da;color:#721c24;'>Produto com ID <strong>" . htmlspecialchars($_GET["id"]) . "</strong> não encontrado.</div>";
                echo "<a href='produto.php?fun=listar' class='btn-back'>← Voltar para Lista</a>";
            }

        // Busca por Nome via GET ?nome=X (pode ser POST também)
        } elseif(isset($_GET["nome"]) && trim($_GET["nome"]) !== '') {
            $termo   = trim($_GET["nome"]);
            $lista   = $dao->buscarPorNome($termo);
            $busca   = $termo;
            include_once("visao/produto/resultadoBuscaProduto.php");

        // Formulário de busca (nenhum parâmetro enviado)
        } else {
            include_once("visao/produto/formBuscaProduto.php");
        }
    }
}
?>
