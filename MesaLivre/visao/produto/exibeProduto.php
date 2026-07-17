<div class="detail-box">
    <h2>Detalhes do Produto</h2>
    
    <div class="detail-item">
        <span class="detail-label">ID:</span>
        <span class="detail-value"><?php echo $p->getIdProduto(); ?></span>
    </div>
    
    <div class="detail-item">
        <span class="detail-label">Nome:</span>
        <span class="detail-value"><?php echo $p->getNome(); ?></span>
    </div>
    
    <div class="detail-item">
        <span class="detail-label">Descrição:</span>
        <span class="detail-value"><?php echo $p->getDescricao(); ?></span>
    </div>
    
    <div class="detail-item">
        <span class="detail-label">Preço:</span>
        <span class="detail-value">R$ <?php echo number_format($p->getPreco(), 2, ',', '.'); ?></span>
    </div>
    
    <div class="detail-item">
        <span class="detail-label">Categoria:</span>
        <span class="detail-value"><?php echo $p->getCategoria(); ?></span>
    </div>
    
    <div class="detail-item">
        <span class="detail-label">Estoque:</span>
        <span class="detail-value"><?php echo $p->getEstoque(); ?> unidades</span>
    </div>
    
    <div class="detail-item">
        <span class="detail-label">Data de Cadastro:</span>
        <span class="detail-value"><?php echo $p->getDataCadastro(); ?></span>
    </div>
    
    <a href="produto.php?fun=listar" class="btn-back">← Voltar para Lista</a>
</div>
