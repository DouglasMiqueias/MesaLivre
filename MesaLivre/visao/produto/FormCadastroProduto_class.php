<div class="form-container">
    <h2>Cadastro de Produto</h2>
    
    <form action="produto.php?fun=cadastrar" method="POST">
        <div class="form-group">
            <label for="nome">Nome:</label>
            <input type="text" name="nome" id="nome" required>
        </div>
        
        <div class="form-group">
            <label for="descricao">Descrição:</label>
            <textarea name="descricao" id="descricao" required></textarea>
        </div>
        
        <div class="form-group">
            <label for="preco">Preço:</label>
            <input type="number" name="preco" id="preco" step="0.01" required>
        </div>
        
        <div class="form-group">
            <label for="categoria">Categoria:</label>
            <input type="text" name="categoria" id="categoria" required>
        </div>
        
        <div class="form-group">
            <label for="estoque">Estoque:</label>
            <input type="number" name="estoque" id="estoque" value="0" required>
        </div>
        
        <div class="form-group">
            <label for="data_cadastro">Data de Cadastro:</label>
            <input type="date" name="data_cadastro" id="data_cadastro" value="<?php echo date('Y-m-d'); ?>" required>
        </div>
        
        <input type="submit" name="enviar" value="Salvar Produto">
        <a href="produto.php?fun=listar" class="btn-back">Cancelar</a>
    </form>
</div>
