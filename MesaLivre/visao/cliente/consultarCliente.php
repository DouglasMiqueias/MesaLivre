<div class="form-container">
    <h2>Consultar Clientes</h2>

    <form action="cliente.php?fun=consultar" method="POST">
        <div class="form-group">
            <label for="termo">Nome do cliente:</label>
            <input
                type="text"
                name="termo"
                id="termo"
                placeholder="Digite o nome do cliente..."
                value="<?= isset($_POST['termo']) ? htmlspecialchars($_POST['termo']) : '' ?>"
                required
            >
        </div>

        <input type="submit" name="enviar" value="Buscar">
        <a href="cliente.php?fun=listar" class="btn-back">Cancelar</a>
    </form>

    <br>

    <?php
    // Só exibe resultado após clicar em Buscar
    if (isset($_POST['enviar'])) {

        if (!empty($this->resultado)) {
    ?>

        <table border="1" cellpadding="8" cellspacing="0">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Telefone</th>
                    <th>Endereço</th>
                    <th>Bairro</th>
                    <th>Observações</th>
                    <th>Data Cadastro</th>
                </tr>
            </thead>

            <tbody>
                <?php foreach ($this->resultado as $cliente) { ?>
                    <tr>
                        <td><?= htmlspecialchars($cliente['nome']) ?></td>
                        <td><?= htmlspecialchars($cliente['telefone']) ?></td>
                        <td><?= htmlspecialchars($cliente['endereco']) ?></td>
                        <td><?= htmlspecialchars($cliente['bairro']) ?></td>
                        <td><?= htmlspecialchars($cliente['observacoes']) ?></td>
                        <td><?= htmlspecialchars($cliente['data_cadastro']) ?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>

    <?php
        } else {
            echo "<p><strong>Nenhum cliente encontrado.</strong></p>";
        }
    }
    ?>

</div>