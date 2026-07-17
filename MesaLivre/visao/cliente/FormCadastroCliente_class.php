<div class="form-container">
    <h2>Cadastro de Cliente</h2>
    
    <form action="cliente.php?fun=cadastrar" method="POST">
        <div class="form-group">
            <label for="nome">Nome:</label>
            <input type="text" name="nome" id="nome" required>
        </div>
        
        <div class="form-group">
            <label for="telefone">Telefone:</label>
            <input type="text" name="telefone" id="telefone" required>
        </div>
        
        <div class="form-group">
            <label for="endereco">Endereço:</label>
            <input type="text" name="endereco" id="endereco" required>
        </div>
        
        <div class="form-group">
            <label for="bairro">Bairro:</label>
            <input type="text" name="bairro" id="bairro" required>
        </div>
        
        <div class="form-group">
            <label for="data_cadastro">Data de Cadastro:</label>
            <input type="date" name="data_cadastro" id="data_cadastro" value="<?php echo date('Y-m-d'); ?>" required>
        </div>
        
        <input type="submit" name="enviar" value="Salvar Cliente">
        <a href="cliente.php?fun=listar" class="btn-back">Cancelar</a>
    </form>
</div>