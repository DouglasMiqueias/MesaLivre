<div class="form-container">
    <h2>Consultar Produtos</h2>

    <form action="produto.php?fun=consultar" method="POST">
        <div class="form-group">
            <label for="termo">Nome do produto:</label>
            <input type="text" name="termo" id="termo" placeholder="Digite o nome para buscar..." required>
        </div>

        <input type="submit" name="enviar" value="Buscar">
        <a href="produto.php?fun=listar" class="btn-back">Cancelar</a>
    </form>
</div>
