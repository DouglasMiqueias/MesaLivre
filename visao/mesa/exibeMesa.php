<div class="detail-box">
    <h2>Detalhes da Mesa</h2>
    
    <div class="detail-item">
        <span class="detail-label">ID:</span>
        <span class="detail-value"><?php echo $m->getIdMesa(); ?></span>
    </div>
    
    <div class="detail-item">
        <span class="detail-label">Número:</span>
        <span class="detail-value"><?php echo $m->getNumero(); ?></span>
    </div>
    
    <div class="detail-item">
        <span class="detail-label">Capacidade:</span>
        <span class="detail-value"><?php echo $m->getCapacidade(); ?> pessoas</span>
    </div>
    
    <div class="detail-item">
        <span class="detail-label">Localização:</span>
        <span class="detail-value"><?php echo $m->getLocalizacao(); ?></span>
    </div>
    
    <div class="detail-item">
        <span class="detail-label">Status:</span>
        <span class="detail-value status-<?php echo strtolower(str_replace('ã', 'a', $m->getStatus())); ?>"><?php echo ucfirst($m->getStatus()); ?></span>
    </div>
    
    <div class="detail-item">
        <span class="detail-label">Descrição:</span>
        <span class="detail-value"><?php echo $m->getDescricao(); ?></span>
    </div>
    
    <a href="mesa.php?fun=listar" class="btn-back">← Voltar para Lista</a>
</div>
