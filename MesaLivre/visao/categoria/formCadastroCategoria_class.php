<div class="form-container">
    <h2>Cadastro de Categoria</h2>
    
    <form action="categoria.php?fun=cadastrar" method="POST">
        <div class="form-group">
            <label for="nome">Nome:</label>
            <input type="text" name="nome" id="nome" required>
        </div>
        
        <div class="form-group">
            <label for="cor">Cor:</label>
            <input type="text" name="cor" id="cor" placeholder="#FF0000" required>
        </div>
        
        <div class="form-group">
            <label for="icone">Ícone:</label>
            <input type="text" name="icone" id="icone" placeholder="fa-solid fa-icon" required>
        </div>
        
        <div class="form-group">
            <label for="ativo">Ativo:</label>
            <select name="ativo" id="ativo" required>
                <option value="1">Sim</option>
                <option value="0">Não</option>
            </select>
        </div>
        
        <input type="submit" name="enviar" value="Cadastrar">
        <a href="categoria.php?fun=listar" class="btn-back">Cancelar</a>
    </form>
</div>
