<style>
    .detail-box {
        max-width: 600px;
        margin: 0 auto;
        padding: 20px;
        background-color: #f8f9fa;
        border-radius: 8px;
    }
    h2 {
        color: #2c3e50;
        margin-bottom: 20px;
        border-bottom: 2px solid #2c3e50;
        padding-bottom: 10px;
    }
    .detail-item {
        margin-bottom: 15px;
        padding: 10px;
        background-color: white;
        border-radius: 4px;
    }
    .detail-label {
        font-weight: bold;
        color: #555;
        display: inline-block;
        width: 150px;
    }
    .detail-value {
        color: #333;
    }
    .status-livre {
        background-color: #d4edda;
        color: #155724;
        padding: 4px 12px;
        border-radius: 12px;
        font-size: 14px;
    }
    .status-ocupada {
        background-color: #f8d7da;
        color: #721c24;
        padding: 4px 12px;
        border-radius: 12px;
        font-size: 14px;
    }
    .status-reservada {
        background-color: #fff3cd;
        color: #856404;
        padding: 4px 12px;
        border-radius: 12px;
        font-size: 14px;
    }
    .status-manutencao {
        background-color: #e2e3e5;
        color: #383d41;
        padding: 4px 12px;
        border-radius: 12px;
        font-size: 14px;
    }
    .btn-back {
        background-color: #2c3e50;
        color: white;
        padding: 10px 20px;
        text-decoration: none;
        border-radius: 4px;
        display: inline-block;
        margin-top: 20px;
    }
    .btn-back:hover {
        background-color: #34495e;
    }
</style>

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
