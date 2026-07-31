<div class="detail-box">
    <h2>Detalhes do Usuário</h2>
    
    <div class="detail-item">
        <span class="detail-label">ID:</span>
        <span class="detail-value"><?php echo $u->getIdUsuario(); ?></span>
    </div>
    
    <div class="detail-item">
        <span class="detail-label">Nome:</span>
        <span class="detail-value"><?php echo $u->getNome(); ?></span>
    </div>
    
    <div class="detail-item">
        <span class="detail-label">Email:</span>
        <span class="detail-value"><?php echo $u->getEmail(); ?></span>
    </div>
    
    <div class="detail-item">
        <span class="detail-label">Telefone:</span>
        <span class="detail-value"><?php echo $u->getTelefone(); ?></span>
    </div>
    
    <div class="detail-item">
        <span class="detail-label">Data de Cadastro:</span>
        <span class="detail-value"><?php echo $u->getDataCadastro(); ?></span>
    </div>
    
    <a href="usuario.php?fun=listar" class="btn-back">← Voltar para Lista</a>
</div>