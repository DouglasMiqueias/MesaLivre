<style>
    .confirm-box {
        max-width: 500px;
        margin: 50px auto;
        padding: 30px;
        background-color: #fff3cd;
        border: 2px solid #ffc107;
        border-radius: 8px;
        text-align: center;
    }
    .confirm-box h2 {
        color: #856404;
        margin-bottom: 20px;
    }
    .confirm-box p {
        color: #856404;
        font-size: 16px;
        margin-bottom: 30px;
    }
    .btn {
        padding: 12px 30px;
        text-decoration: none;
        border-radius: 4px;
        color: white;
        font-size: 16px;
        margin: 0 10px;
        display: inline-block;
    }
    .btn-yes {
        background-color: #e74c3c;
    }
    .btn-yes:hover {
        background-color: #c0392b;
    }
    .btn-no {
        background-color: #95a5a6;
    }
    .btn-no:hover {
        background-color: #7f8c8d;
    }
</style>

<div class="confirm-box">
    <h2>Confirmar Exclusão</h2>
    <p>Tem certeza que deseja excluir este cliente?<br>Esta ação não pode ser desfeita!</p>
    
    <a href="cliente.php?fun=excluir&id=<?php echo $_GET['id']; ?>&op=sim" class="btn btn-yes">Sim, Excluir</a>
    <a href="cliente.php?fun=listar" class="btn btn-no">Não, Cancelar</a>
</div>
