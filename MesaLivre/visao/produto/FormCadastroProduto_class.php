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
    input[type="date"],
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
