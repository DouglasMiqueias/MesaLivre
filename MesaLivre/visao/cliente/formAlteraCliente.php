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
    input[type="date"] {
        width: 100%;
        padding: 10px;
        border: 1px solid #ddd;
        border-radius: 4px;
        font-size: 14px;
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
    <h2>Alterar Cliente</h2>
    
    <form action="cliente.php?fun=alterar" method="POST">
        <input type="hidden" name="id_cliente" value="<?php echo $c->getIdCliente(); ?>">
        
        <div class="form-group">
            <label for="nome">Nome:</label>
            <input type="text" name="nome" id="nome" value="<?php echo $c->getNome(); ?>" required>
        </div>
        
        <div class="form-group">
            <label for="telefone">Telefone:</label>
            <input type="text" name="telefone" id="telefone" value="<?php echo $c->getTelefone(); ?>" required>
        </div>
        
        <div class="form-group">
            <label for="endereco">Endereço:</label>
            <input type="text" name="endereco" id="endereco" value="<?php echo $c->getEndereco(); ?>" required>
        </div>
        
        <div class="form-group">
            <label for="bairro">Bairro:</label>
            <input type="text" name="bairro" id="bairro" value="<?php echo $c->getBairro(); ?>" required>
        </div>
        
        <div class="form-group">
            <label for="data_cadastro">Data de Cadastro:</label>
            <input type="date" name="data_cadastro" id="data_cadastro" value="<?php echo $c->getDataCadastro(); ?>" required readonly style="background-color: #f5f5f5; cursor: not-allowed;">
        </div>
        
        <input type="submit" name="enviar" value="Salvar Alterações">
        <a href="cliente.php?fun=listar" class="btn-back">Cancelar</a>
    </form>
</div>
