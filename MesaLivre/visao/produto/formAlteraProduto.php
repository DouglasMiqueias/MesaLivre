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
