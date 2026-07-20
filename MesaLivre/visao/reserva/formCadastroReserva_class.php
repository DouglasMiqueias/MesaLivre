<div class="form-container">
    <h2>Cadastro de Reserva</h2>
    
    <form action="reserva.php?fun=cadastrar" method="POST">
        <div class="form-group">
            <label for="id_cliente">Cliente:</label>
            <select name="id_cliente" id="id_cliente" required>
                <option value="">Selecione...</option>
                <?php foreach($clientes as $cliente): ?>
                    <option value="<?php echo $cliente['id_cliente']; ?>">
                        <?php echo $cliente['nome']; ?>
                    </option>
                <?php endforeach; ?>
            </select>
        </div>
        
        <div class="form-group">
            <label for="id_mesa">Mesa:</label>
            <select name="id_mesa" id="id_mesa" required>
                <option value="">Selecione...</option>
                <?php foreach($mesas as $mesa): ?>
                    <option value="<?php echo $mesa['id_mesa']; ?>">
                        <?php echo $mesa['numero']; ?>
                    </option>
                <?php endforeach; ?>
            </select>
        </div>
        
        <div class="form-group">
            <label for="data_reserva">Data:</label>
            <input type="date" name="data_reserva" id="data_reserva" required>
        </div>
        
        <div class="form-group">
            <label for="hora_inicio">Hora Início:</label>
            <input type="time" name="hora_inicio" id="hora_inicio" required>
        </div>
        
        <div class="form-group">
            <label for="hora_fim">Hora Fim:</label>
            <input type="time" name="hora_fim" id="hora_fim" required>
        </div>
        
        <div class="form-group">
            <label for="numero_pessoas">Número de Pessoas:</label>
            <input type="number" name="numero_pessoas" id="numero_pessoas" required>
        </div>
        
        <div class="form-group">
            <label for="status">Status:</label>
            <select name="status" id="status" required>
                <option value="confirmada">Confirmada</option>
                <option value="cancelada">Cancelada</option>
                <option value="finalizada">Finalizada</option>
            </select>
        </div>
        
        <div class="form-group">
            <label for="observacoes">Observações:</label>
            <textarea name="observacoes" id="observacoes"></textarea>
        </div>
        
        <input type="submit" name="enviar" value="Cadastrar Reserva">
        <a href="reserva.php?fun=listar" class="btn-back">Cancelar</a>
    </form>
</div>