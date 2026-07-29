<div class="form-container">
    <h2>Consultar Categorias</h2>

    <form action="categoria.php?fun=consultar" method="POST">
        <div class="form-group">
            <label for="termo">Nome da categoria:</label>
            <input type="text" name="termo" id="termo" placeholder="Digite o nome para buscar..." required>
        </div>

        <input type="submit" name="enviar" value="Buscar">
        <a href="categoria.php?fun=listar" class="btn-back">Cancelar</a>
    </form>
</div>
