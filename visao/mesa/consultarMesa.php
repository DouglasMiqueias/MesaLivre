<div class="form-container">
    <h2>Consultar Mesas</h2>
    
    <form action="mesa.php?fun=consultar" method="POST">
        <div class="form-group">
            <label for="tipo_busca">Buscar por:</label>
            <select name="tipo_busca" id="tipo_busca">
                <option value="numero">Número</option>
                <option value="localizacao">Localização</option>
                <option value="status">Status</option>
                <option value="capacidade">Capacidade</option>
            </select>
        </div>
        
        <div class="form-group">
            <label for="termo">Termo de busca:</label>
            <input type="text" name="termo" id="termo" placeholder="Digite o termo para buscar...">
        </div>
        
        <input type="submit" name="enviar" value="Buscar">
        <a href="mesa.php?fun=listar" class="btn-back">Cancelar</a>
    </form>
</div>
