<div class="detail-box">
    <h2>Detalhes da Reserva</h2>

    <div class="detail-item">
        <span class="detail-label">ID:</span>
        <span class="detail-value"><?php echo $reserva->getIdReserva(); ?></span>
    </div>

    <div class="detail-item">
        <span class="detail-label">Mesa:</span>
        <span class="detail-value"><?php echo $reserva->getMesa(); ?></span>
    </div>

    <div class="detail-item">
        <span class="detail-label">Cliente:</span>
        <span class="detail-value"><?php echo $reserva->getCliente(); ?></span>
    </div>

    <div class="detail-item">
        <span class="detail-label">Data:</span>
        <span class="detail-value"><?php echo $reserva->getData(); ?></span>
    </div>

    <div class="detail-item">
        <span class="detail-label">Hora:</span>
        <span class="detail-value"><?php echo $reserva->getHora(); ?></span>
    </div>

    <div class="detail-item">
        <span class="detail-label">Status:</span>
        <span class="detail-value"><?php echo $reserva->getStatus(); ?></span>
    </div>

    <div class="detail-item">
        <span class="detail-label">Observações:</span>
        <span class="detail-value"><?php echo $reserva->getObservacoes(); ?></span>
    </div>

    <a href="reserva.php?fun=listar" class="btn-back">← Voltar para Lista</a>
</div>
