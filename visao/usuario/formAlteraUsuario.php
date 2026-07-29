<div class="form-container">
    <h2>Alterar Usuário</h2>
    
    <form action="usuario.php?fun=alterar" method="POST">
        <input type="hidden" name="id_usuario" value="<?php echo $u->getIdUsuario(); ?>">
        <div class="form-group">
            <label for="nome">Nome:</label>
            <input type="text" name="nome" id="nome" value="<?php echo $u->getNome(); ?>" required>
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" value="<?php echo $u->getEmail(); ?>" required>
        </div>
        <div class="form-group">
            <label for="senha">Senha:</label>
            <input type="password" name="senha" id="senha" required>
        </div>
        <div class="form-group">
            <label for="tipo_usuario">Tipo de Usuário:</label>
            <select name="tipo_usuario" id="tipo_usuario" required>
                <option value="admin" <?php echo $u->getTipo() == 'admin' ? 'selected' : ''; ?>>Administrador</option>
                <option value="garcom" <?php echo $u->getTipo() == 'garcom' ? 'selected' : ''; ?>>Garçom</option>
                <option value="gestor" <?php echo $u->getTipo() == 'gestor' ? 'selected' : ''; ?>>Gerente</option>
                <option value="cozinha" <?php echo $u->getTipo() == 'cozinha' ? 'selected' : ''; ?>>Cozinha</option>
                <option value="caixa" <?php echo $u->getTipo() == 'caixa' ? 'selected' : ''; ?>>Caixa</option>
            </select>
        </div>
        <div class="form-group">
            <label for="status">Status:</label>
            <select name="status" id="status" required>
                <option value="ativo" <?php echo $u->getStatus() == 'ativo' ? 'selected' : ''; ?>>Ativo</option>
                <option value="inativo" <?php echo $u->getStatus() == 'inativo' ? 'selected' : ''; ?>>Inativo</option>
            </select>
        </div>
        <div class="form-group">
            <label for="data_cadastro">Data de Cadastro:</label>
            <input type="date" name="data_cadastro" id="data_cadastro" value="<?php echo $u->getDataCadastro(); ?>" required>
        </div>
        <input type="submit" name="enviar" value="Salvar Alterações">
        <a href="usuario.php?fun=listar" class="btn-back">Cancelar</a>
    </form>

</div>