<div class="form-container">
    <h2>Cadastro de Produto</h2>
    
    <form action="produto.php?fun=cadastrar" method="POST">
        <div class="form-group">
            <label for="id_categoria">Categoria:</label>
            <select name="id_categoria" id="id_categoria" required>
                <option value="">Selecione...</option>
                <?php foreach($categorias as $cat): ?>
                    <option value="<?php echo $cat['id_categoria']; ?>">
                        <?php echo $cat['nome']; ?>
                    </option>
                <?php endforeach; ?>
            </select>
        </div>

        <div class="form-group">
            <label for="nome">Nome:</label>
            <input type="text" name="nome" id="nome" required>
        </div>
        
        <div class="form-group">
            <label for="descricao">Descrição:</label>
            <textarea name="descricao" id="descricao"></textarea>
        </div>
        
        <div class="form-group">
            <label for="preco">Preço (R$):</label>
            <input type="number" name="preco" id="preco" step="0.01" min="0" required>
        </div>
        
        <div class="form-group">
            <label for="estoque">Estoque (unidades):</label>
            <input type="number" name="estoque" id="estoque" value="0" min="0" required>
        </div>

        <div class="form-group">
            <label for="tempo_preparo">Tempo de Preparo (minutos):</label>
            <input type="number" name="tempo_preparo" id="tempo_preparo" value="0" min="0">
        </div>

        <div class="form-group">
            <label for="imagem">URL / Caminho da Imagem:</label>
            <input type="text" name="imagem" id="imagem" placeholder="Ex: assets/img/produto.jpg">
        </div>

        <div class="form-group">
            <label>
                <input type="checkbox" name="ativo" id="ativo" value="1" checked>
                Produto Ativo
            </label>
        </div>
        
        <input type="submit" name="enviar" value="Salvar Produto">
        <a href="produto.php?fun=listar" class="btn-back">Cancelar</a>
    </form>
</div>
