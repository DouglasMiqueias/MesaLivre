<div class="detail-box">
    <h2>Detalhes do Cliente</h2>
    
    <div class="detail-item">
        <span class="detail-label">ID:</span>
        <span class="detail-value"><?php echo $c->getIdCliente(); ?></span>
    </div>
    
    <div class="detail-item">
        <span class="detail-label">Nome:</span>
        <span class="detail-value"><?php echo $c->getNome(); ?></span>
    </div>
    
    <div class="detail-item">
        <span class="detail-label">Telefone:</span>
        <span class="detail-value"><?php echo $c->getTelefone(); ?></span>
    </div>
    
    <div class="detail-item">
        <span class="detail-label">Endereço:</span>
        <span class="detail-value"><?php echo $c->getEndereco(); ?></span>
    </div>
    
    <div class="detail-item">
        <span class="detail-label">Bairro:</span>
        <span class="detail-value"><?php echo $c->getBairro(); ?></span>
    </div>
    
    <div class="detail-item">
        <span class="detail-label">Observações:</span>
        <span class="detail-value"><?php echo nl2br($c->getObservacoes() ?? ''); ?></span>
    </div>
    
    <div class="detail-item">
        <span class="detail-label">Data de Cadastro:</span>
        <span class="detail-value"><?php echo $c->getDataCadastro(); ?></span>
    </div>
    
    <a href="cliente.php?fun=listar" class="btn-back">← Voltar para Lista</a>
</div>
