<div class="form-container">
    <h2>Alterar Produto</h2>
    
    <form action="produto.php?fun=alterar" method="POST">
        <input type="hidden" name="id_produto" value="<?php echo $p->getIdProduto(); ?>">

        <div class="form-group">
            <label for="id_categoria">Categoria:</label>
            <select name="id_categoria" id="id_categoria" required>
                <option value="">Selecione...</option>
                <?php foreach($categorias as $cat): ?>
                    <option value="<?php echo $cat['id_categoria']; ?>"
                        <?php echo $p->getIdCategoria() == $cat['id_categoria'] ? 'selected' : ''; ?>>
                        <?php echo $cat['nome']; ?>
                    </option>
                <?php endforeach; ?>
            </select>
        </div>
        
        <div class="form-group">
            <label for="nome">Nome:</label>
            <input type="text" name="nome" id="nome" value="<?php echo $p->getNome(); ?>" required>
        </div>
        
        <div class="form-group">
            <label for="descricao">Descrição:</label>
            <textarea name="descricao" id="descricao"><?php echo $p->getDescricao(); ?></textarea>
        </div>
        
        <div class="form-group">
            <label for="preco">Preço (R$):</label>
            <input type="number" name="preco" id="preco" step="0.01" min="0" value="<?php echo $p->getPreco(); ?>" required>
        </div>
        
        <div class="form-group">
            <label for="estoque">Estoque (unidades):</label>
            <input type="number" name="estoque" id="estoque" value="<?php echo $p->getEstoque(); ?>" min="0" required>
        </div>

        <div class="form-group">
            <label for="tempo_preparo">Tempo de Preparo (minutos):</label>
            <input type="number" name="tempo_preparo" id="tempo_preparo" value="<?php echo $p->getTempoPreparo(); ?>" min="0">
        </div>

        <div class="form-group">
            <label for="imagem">URL / Caminho da Imagem:</label>
            <input type="text" name="imagem" id="imagem" value="<?php echo $p->getImagem(); ?>" placeholder="Ex: assets/img/produto.jpg">
        </div>

        <div class="form-group">
            <label>
                <input type="checkbox" name="ativo" id="ativo" value="1" <?php echo $p->getAtivo() ? 'checked' : ''; ?>>
                Produto Ativo
            </label>
        </div>
        
        <input type="submit" name="enviar" value="Salvar Alterações">
        <a href="produto.php?fun=listar" class="btn-back">Cancelar</a>
    </form>
</div>
