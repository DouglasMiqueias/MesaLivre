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
        background-color: #dc3545;
        color: white;
        padding: 12px 30px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        font-size: 16px;
        margin-top: 10px;
    }
    input[type="submit"]:hover {
        background-color: #b02a37;
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
