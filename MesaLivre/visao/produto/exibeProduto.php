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
