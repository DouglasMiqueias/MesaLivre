<div class="form-container">
    <h2>Alterar Reserva</h2>
    
    <form action="reserva.php?fun=alterar" method="POST">
        <input type="hidden" name="id_reserva" value="<?php echo $r->getIdReserva(); ?>">
        
        <div class="form-group">
            <label for="id_cliente">Cliente:</label>
            <select name="id_cliente" id="id_cliente" required>
                <option value="">Selecione...</option>
                <?php foreach($clientes as $cliente): ?>
                    <option value="<?php echo $cliente['id_cliente']; ?>" <?php echo $r->getIdCliente() == $cliente['id_cliente'] ? 'selected' : ''; ?>>
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
                    <option value="<?php echo $mesa['id_mesa']; ?>" <?php echo $r->getIdMesa() == $mesa['id_mesa'] ? 'selected' : ''; ?>>
                        <?php echo $mesa['numero']; ?>
                    </option>
                <?php endforeach; ?>
            </select>
        </div>
        
        <div class="form-group">
            <label for="data_reserva">Data:</label>
            <input type="date" name="data_reserva" id="data_reserva" value="<?php echo $r->getDataReserva(); ?>" required>
        </div>
        
        <div class="form-group">
            <label for="hora_inicio">Hora Início:</label>
            <input type="time" name="hora_inicio" id="hora_inicio" value="<?php echo $r->getHoraInicio(); ?>" required>
        </div>
        
        <div class="form-group">
            <label for="hora_fim">Hora Fim:</label>
            <input type="time" name="hora_fim" id="hora_fim" value="<?php echo $r->getHoraFim(); ?>" required>
        </div>
        
        <div class="form-group">
            <label for="numero_pessoas">Número de Pessoas:</label>
            <input type="number" name="numero_pessoas" id="numero_pessoas" value="<?php echo $r->getNumeroPessoas(); ?>" required>
        </div>
        
        <div class="form-group">
            <label for="status">Status:</label>
            <select name="status" id="status" required>
                <option value="confirmada" <?php echo $r->getStatus() == 'confirmada' ? 'selected' : ''; ?>>Confirmada</option>
                <option value="cancelada" <?php echo $r->getStatus() == 'cancelada' ? 'selected' : ''; ?>>Cancelada</option>
                <option value="finalizada" <?php echo $r->getStatus() == 'finalizada' ? 'selected' : ''; ?>>Finalizada</option>
            </select>
        </div>
        
        <div class="form-group">
            <label for="observacoes">Observações:</label>
            <textarea name="observacoes" id="observacoes"><?php echo $r->getObservacoes(); ?></textarea>
        </div>
        
        <input type="submit" name="enviar" value="Salvar Alterações">
        <a href="reserva.php?fun=listar" class="btn-back">Cancelar</a>
    </form>
</div>
