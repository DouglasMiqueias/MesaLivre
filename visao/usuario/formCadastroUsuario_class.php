<div class="form-con">
    <h2>Cadastro de Usuário</h2>

    <form action="usuario.php?fun=cadastrar" method="POST">
        <div class="form-group">
            <label for="nome">Nome:</label>
            <input type="text" name="nome" id="nome" placeholder="Digite o nome do Usuário" required>
        </div>

        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" placeholder="Digite o email do Usuário" required>
        </div>

        <div class="form-group">
            <label for="senha">Senha:</label>
            <input type="password" name="senha" id="senha" placeholder="Digite a senha do Usuário" required>
        </div>

        <div class="form-group">
            <label for="confirmar_senha">Confirmar Senha:</label>
            <input type="password" name="confirmar_senha" id="confirmar_senha" placeholder="Confirme a senha do Usuário" required>
        </div>

        <div class="form-group">
            <label for="tipo_usuario">Tipo de Usuário:</label>
            <select name="tipo_usuario" id="tipo_usuario" required>
                <option value="admin">Administrador</option>
                <option value="garcom">Garçom</option>
                <option value="gestor">Gerente</option>
                <option value="cozinha">Cozinha</option>
                <option value="caixa">Caixa</option>
            </select>
        </div>

        <div class="form-group">
            <label for="status">Status:</label>
            <select name="status" id="status" required>
                <option value="ativo" selected>Ativo</option>
                <option value="inativo">Inativo</option>
            </select>
        </div>

        
        <div class="form-group">
            <label for="data_cadastro">Data de Cadastro:</label>
            <input type="date" name="data_cadastro" id="data_cadastro" value="<?php echo date('d-m-Y'); ?>" required>
        </div>

        <input type="submit" name="enviar" value="Salvar Usuário">
        <a href="usuario.php?fun=listar" class="btn-back">Cancelar</a>
        </form>
</div>