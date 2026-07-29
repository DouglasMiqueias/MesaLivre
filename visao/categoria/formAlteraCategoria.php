<div class="form-container">
    <h2>Alterar Categoria</h2>
    
    <form action="categoria.php?fun=alterar" method="POST">
        <input type="hidden" name="id_categoria" value="<?php echo $c->getIdCategoria(); ?>">
        
        <div class="form-group">
            <label for="nome">Nome:</label>
            <input type="text" name="nome" id="nome" value="<?php echo $c->getNome(); ?>" required>
        </div>
        
        <div class="form-group">
            <label for="cor">Cor:</label>
            <input type="text" name="cor" id="cor" value="<?php echo $c->getCor(); ?>" required>
        </div>
        
        <div class="form-group">
            <label for="icone">Ícone:</label>
            <input type="text" name="icone" id="icone" value="<?php echo $c->getIcone(); ?>" required>
        </div>
        
        <div class="form-group">
            <label for="ativo">Ativo:</label>
            <select name="ativo" id="ativo" required>
                <option value="1" <?php echo $c->getAtivo() == 1 ? 'selected' : ''; ?>>Sim</option>
                <option value="0" <?php echo $c->getAtivo() == 0 ? 'selected' : ''; ?>>Não</option>
            </select>
        </div>
        
        <input type="submit" name="enviar" value="Salvar Alterações">
        <a href="categoria.php?fun=listar" class="btn-back">Cancelar</a>
    </form>
</div>
