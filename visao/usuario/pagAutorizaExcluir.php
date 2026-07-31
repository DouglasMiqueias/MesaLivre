<div class="confirm-box">
    <h2>Confirmar Exclusão</h2>
    <p>Tem certeza que deseja excluir este usuário?<br>Esta ação não pode ser desfeita!</p>
    
    <a href="usuario.php?fun=excluir&id=<?php echo $_GET['id']; ?>&op=sim" class="btn btn-yes">Sim, Excluir</a>
    <a href="usuario.php?fun=listar" class="btn btn-no">Não, Cancelar</a>
</div>