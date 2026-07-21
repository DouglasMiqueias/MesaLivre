<?php
include_once "ConnectionFactory_class.php";
include_once "Produto_class.php";

class ProdutoDAO {

    public function cadastrar(Produto $prod){
        try{
            $fabrica = new ConnectionFactory();
            $con = $fabrica->getConnection();

            // Verificar se categoria existe e está ativa
            $stmtCheck = $con->prepare("SELECT id_categoria FROM categorias WHERE id_categoria = :id_categoria AND ativo = 1");
            $stmtCheck->bindValue(':id_categoria', $prod->getIdCategoria());
            $stmtCheck->execute();

            if($stmtCheck->rowCount() == 0){
                echo "Erro: A categoria selecionada não existe ou não está ativa.";
                $fabrica->close();
                return;
            }

            $stmt = $con->prepare(
                "INSERT INTO produtos (id_categoria, nome, descricao, preco, estoque, tempo_preparo, imagem, ativo)
                 VALUES (:id_categoria, :nome, :descricao, :preco, :estoque, :tempo_preparo, :imagem, :ativo)"
            );

            $stmt->bindValue(':id_categoria', $prod->getIdCategoria());
            $stmt->bindValue(':nome', $prod->getNome());
            $stmt->bindValue(':descricao', $prod->getDescricao());
            $stmt->bindValue(':preco', $prod->getPreco());
            $stmt->bindValue(':estoque', $prod->getEstoque());
            $stmt->bindValue(':tempo_preparo', $prod->getTempoPreparo());
            $stmt->bindValue(':imagem', $prod->getImagem());
            $stmt->bindValue(':ativo', $prod->getAtivo());

            $stmt->execute();
            $fabrica->close();
        } catch (PDOException $ex){
            echo "Erro ao cadastrar produto: " . $ex->getMessage();
        }
    }

    public function listar(){
        try{
            $fabrica = new ConnectionFactory();
            $con = $fabrica->getConnection();
            
            $stmt = $con->prepare(
                "SELECT p.*, c.nome AS categoria
                 FROM produtos p
                 INNER JOIN categorias c ON p.id_categoria = c.id_categoria
                 ORDER BY p.nome ASC"
            );
            $stmt->execute();
            
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
            $fabrica->close();
            return $result;
        } catch (PDOException $ex){
            echo "Erro ao listar produtos: " . $ex->getMessage();
            return [];
        }
    }

    public function alterar(Produto $prod) {
        try {
            $fabrica = new ConnectionFactory();
            $con = $fabrica->getConnection();

            // Verificar se categoria existe e está ativa
            $stmtCheck = $con->prepare("SELECT id_categoria FROM categorias WHERE id_categoria = :id_categoria AND ativo = 1");
            $stmtCheck->bindValue(':id_categoria', $prod->getIdCategoria());
            $stmtCheck->execute();

            if($stmtCheck->rowCount() == 0){
                echo "Erro: A categoria selecionada não existe ou não está ativa.";
                $fabrica->close();
                return;
            }

            $stmt = $con->prepare(
                "UPDATE produtos SET
                    id_categoria   = :id_categoria,
                    nome           = :nome,
                    descricao      = :descricao,
                    preco          = :preco,
                    estoque        = :estoque,
                    tempo_preparo  = :tempo_preparo,
                    imagem         = :imagem,
                    ativo          = :ativo
                 WHERE id_produto = :id_produto"
            );

            $stmt->bindValue(':id_categoria', $prod->getIdCategoria());
            $stmt->bindValue(':nome', $prod->getNome());
            $stmt->bindValue(':descricao', $prod->getDescricao());
            $stmt->bindValue(':preco', $prod->getPreco());
            $stmt->bindValue(':estoque', $prod->getEstoque());
            $stmt->bindValue(':tempo_preparo', $prod->getTempoPreparo());
            $stmt->bindValue(':imagem', $prod->getImagem());
            $stmt->bindValue(':ativo', $prod->getAtivo());
            $stmt->bindValue(':id_produto', $prod->getIdProduto());

            $stmt->execute();
            $fabrica->close();
        } catch (PDOException $ex) {
            echo "Erro ao alterar produto: " . $ex->getMessage();
        }
    }

    public function excluir(Produto $prod) {
        try {
            $fabrica = new ConnectionFactory();
            $con = $fabrica->getConnection();
            
            $stmt = $con->prepare("DELETE FROM produtos WHERE id_produto = :id_produto");
            $stmt->bindValue(':id_produto', $prod->getIdProduto());
            
            $stmt->execute();
            $fabrica->close();
        } catch (PDOException $ex) {
            echo "Erro ao excluir produto: " . $ex->getMessage();
        }
    }

    public function exibir($id) {
        try {
            $fabrica = new ConnectionFactory();
            $con = $fabrica->getConnection();
            
            $stmt = $con->prepare(
                "SELECT p.*, c.nome AS categoria_nome
                 FROM produtos p
                 INNER JOIN categorias c ON p.id_categoria = c.id_categoria
                 WHERE p.id_produto = :id"
            );
            $stmt->bindValue(':id', $id);
            $stmt->execute();
            
            $dado = $stmt->fetchAll(PDO::FETCH_ASSOC);
            $fabrica->close();
            
            if(count($dado) == 0) return null;

            $p = new Produto();
            $p->setIdProduto($dado[0]["id_produto"]);
            $p->setIdCategoria($dado[0]["id_categoria"]);
            $p->setNome($dado[0]["nome"]);
            $p->setDescricao($dado[0]["descricao"]);
            $p->setPreco($dado[0]["preco"]);
            $p->setEstoque($dado[0]["estoque"]);
            $p->setTempoPreparo($dado[0]["tempo_preparo"]);
            $p->setImagem($dado[0]["imagem"]);
            $p->setAtivo($dado[0]["ativo"]);
            $p->setDataCadastro($dado[0]["data_cadastro"]);
            $p->setCategoriaNome($dado[0]["categoria_nome"]);
            
            return $p;
        } catch (PDOException $ex) {
            echo "Erro ao exibir produto: " . $ex->getMessage();
            return null;
        }
    }
    /**
     * Busca um produto pelo ID e retorna um objeto Produto (com JOIN de categoria).
     * Alias semântico de exibir() para uso direto em controllers.
     */
    public function buscarPorId($id) {
        return $this->exibir($id);
    }

    /**
     * Busca produtos cujo nome contenha o termo informado (LIKE %termo%).
     * Retorna um array associativo pronto para renderização em lista.
     */
    public function buscarPorNome($nome) {
        try {
            $fabrica = new ConnectionFactory();
            $con = $fabrica->getConnection();

            $stmt = $con->prepare(
                "SELECT p.*, c.nome AS categoria
                 FROM produtos p
                 INNER JOIN categorias c ON p.id_categoria = c.id_categoria
                 WHERE p.nome LIKE :nome
                 ORDER BY p.nome ASC"
            );
            $stmt->bindValue(':nome', '%' . $nome . '%');
            $stmt->execute();

            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
            $fabrica->close();
            return $result;
        } catch (PDOException $ex) {
            echo "Erro ao buscar produto por nome: " . $ex->getMessage();
            return [];
        }
    }

    /**
     * Alterna (toggle) o campo ativo de um produto.
     * Passa 1 para ativar, 0 para desativar.
     */
    public function alterarDisponibilidade($id_produto, $ativo) {
        try {
            $fabrica = new ConnectionFactory();
            $con = $fabrica->getConnection();

            $stmt = $con->prepare(
                "UPDATE produtos SET ativo = :ativo WHERE id_produto = :id_produto"
            );
            $stmt->bindValue(':ativo', (int)$ativo, PDO::PARAM_INT);
            $stmt->bindValue(':id_produto', (int)$id_produto, PDO::PARAM_INT);

            $stmt->execute();
            $fabrica->close();
            return true;
        } catch (PDOException $ex) {
            echo "Erro ao alterar disponibilidade: " . $ex->getMessage();
            return false;
        }
    }
}
?>