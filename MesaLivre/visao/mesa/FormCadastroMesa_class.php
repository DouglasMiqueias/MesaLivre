<div class="form-container">
    <h2>Cadastro de Mesa</h2>
    
    <form action="mesa.php?fun=cadastrar" method="POST">
        <div class="form-group">
            <label for="numero">Número:</label>
            <input type="text" name="numero" id="numero" required>
        </div>
        
        <div class="form-group">
            <label for="capacidade">Capacidade (pessoas):</label>
            <input type="number" name="capacidade" id="capacidade" required>
        </div>
        
        <div class="form-group">
            <label for="localizacao">Localização:</label>
            <select name="localizacao" id="localizacao" required>
                <option value="">Selecione...</option>
                <option value="Área Interna">Área Interna</option>
                <option value="Varanda">Varanda</option>
                <option value="Terraço">Terraço</option>
                <option value="Jardim">Jardim</option>
            </select>
        </div>
        
        <div class="form-group">
            <label for="status">Status:</label>
            <select name="status" id="status" required>
                <option value="livre">Livre</option>
                <option value="ocupada">Ocupada</option>
                <option value="reservada">Reservada</option>
                <option value="manutenção">Manutenção</option>
            </select>
        </div>
        
        <div class="form-group">
            <label for="descricao">Descrição:</label>
            <textarea name="descricao" id="descricao"></textarea>
        </div>
        
        <input type="submit" name="enviar" value="Salvar Mesa">
        <a href="mesa.php?fun=listar" class="btn-back">Cancelar</a>
    </form>
</div>
