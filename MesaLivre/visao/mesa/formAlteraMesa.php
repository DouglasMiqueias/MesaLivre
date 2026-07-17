<div class="form-container">
    <h2>Alterar Mesa</h2>
    
    <form action="mesa.php?fun=alterar" method="POST">
        <input type="hidden" name="id_mesa" value="<?php echo $m->getIdMesa(); ?>">
        
        <div class="form-group">
            <label for="numero">Número:</label>
            <input type="text" name="numero" id="numero" value="<?php echo $m->getNumero(); ?>" required>
        </div>
        
        <div class="form-group">
            <label for="capacidade">Capacidade (pessoas):</label>
            <input type="number" name="capacidade" id="capacidade" value="<?php echo $m->getCapacidade(); ?>" required>
        </div>
        
        <div class="form-group">
            <label for="localizacao">Localização:</label>
            <select name="localizacao" id="localizacao" required>
                <option value="">Selecione...</option>
                <option value="Área Interna" <?php echo $m->getLocalizacao() == 'Área Interna' ? 'selected' : ''; ?>>Área Interna</option>
                <option value="Varanda" <?php echo $m->getLocalizacao() == 'Varanda' ? 'selected' : ''; ?>>Varanda</option>
                <option value="Terraço" <?php echo $m->getLocalizacao() == 'Terraço' ? 'selected' : ''; ?>>Terraço</option>
                <option value="Jardim" <?php echo $m->getLocalizacao() == 'Jardim' ? 'selected' : ''; ?>>Jardim</option>
            </select>
        </div>
        
        <div class="form-group">
            <label for="status">Status:</label>
            <select name="status" id="status" required readonly style="background-color: #f5f5f5; cursor: not-allowed;">
                <option value="livre" <?php echo $m->getStatus() == 'livre' ? 'selected' : ''; ?>>Livre</option>
                <option value="ocupada" <?php echo $m->getStatus() == 'ocupada' ? 'selected' : ''; ?>>Ocupada</option>
                <option value="reservada" <?php echo $m->getStatus() == 'reservada' ? 'selected' : ''; ?>>Reservada</option>
                <option value="manutenção" <?php echo $m->getStatus() == 'manutenção' ? 'selected' : ''; ?>>Manutenção</option>
            </select>
        </div>
        
        <div class="form-group">
            <label for="descricao">Descrição:</label>
            <textarea name="descricao" id="descricao"><?php echo $m->getDescricao(); ?></textarea>
        </div>
        
        <input type="submit" name="enviar" value="Salvar Alterações">
        <a href="mesa.php?fun=listar" class="btn-back">Cancelar</a>
    </form>
</div>
