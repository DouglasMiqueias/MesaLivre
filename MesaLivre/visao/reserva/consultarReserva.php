<div class="form-container">
    <h2>Consultar Reservas</h2>

    <form action="reserva.php?fun=consultar" method="POST">
        <div class="form-group">
            <label for="termo">Nome do cliente:</label>
            <input type="text" name="termo" id="termo" placeholder="Digite o nome do cliente para buscar..." required>
        </div>

        <input type="submit" name="enviar" value="Buscar">
        <a href="reserva.php?fun=listar" class="btn-back">Cancelar</a>
    </form>
</div>
