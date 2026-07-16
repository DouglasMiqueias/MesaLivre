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
    select,
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
