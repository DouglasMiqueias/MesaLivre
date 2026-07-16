<style>
    .form-container {
        max-width: 600px;
        margin: 0 auto;
    }
    h2 {
        color: #2c3e50;
        margin-bottom: 20px;
    }
    .form-group {
        margin-bottom: 15px;
    }
    label {
        display: block;
        margin-bottom: 5px;
        color: #333;
        font-weight: bold;
    }
    input[type="text"],
    input[type="number"],
    input[type="date"],
    textarea {
        width: 100%;
        padding: 10px;
        border: 1px solid #ddd;
        border-radius: 4px;
        font-size: 14px;
    }
    textarea {
        min-height: 100px;
        resize: vertical;
    }
    input[type="submit"] {
        background-color: #2c3e50;
        color: white;
        padding: 12px 30px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        font-size: 16px;
        margin-top: 10px;
    }
    input[type="submit"]:hover {
        background-color: #34495e;
    }
    .btn-back {
        background-color: #95a5a6;
        color: white;
        padding: 10px 20px;
        text-decoration: none;
        border-radius: 4px;
        display: inline-block;
        margin-top: 10px;
    }
</style>

<div class="form-container">
    <h2>Alterar Produto</h2>
    
    <form action="produto.php?fun=alterar" method="POST">
        <input type="hidden" name="id_produto" value="<?php echo $p->getIdProduto(); ?>">
        
        <div class="form-group">
            <label for="nome">Nome:</label>
            <input type="text" name="nome" id="nome" value="<?php echo $p->getNome(); ?>" required>
        </div>
        
        <div class="form-group">
            <label for="descricao">Descrição:</label>
            <textarea name="descricao" id="descricao" required><?php echo $p->getDescricao(); ?></textarea>
        </div>
        
        <div class="form-group">
            <label for="preco">Preço:</label>
            <input type="number" name="preco" id="preco" step="0.01" value="<?php echo $p->getPreco(); ?>" required>
        </div>
        
        <div class="form-group">
            <label for="categoria">Categoria:</label>
            <input type="text" name="categoria" id="categoria" value="<?php echo $p->getCategoria(); ?>" required>
        </div>
        
        <div class="form-group">
            <label for="estoque">Estoque:</label>
            <input type="number" name="estoque" id="estoque" value="<?php echo $p->getEstoque(); ?>" required>
        </div>
        
        <div class="form-group">
            <label for="data_cadastro">Data de Cadastro:</label>
            <input type="date" name="data_cadastro" id="data_cadastro" value="<?php echo $p->getDataCadastro(); ?>" required readonly style="background-color: #f5f5f5; cursor: not-allowed;">
        </div>
        
        <input type="submit" name="enviar" value="Salvar Alterações">
        <a href="produto.php?fun=listar" class="btn-back">Cancelar</a>
    </form>
</div>
