<?php
session_start();

if(!isset($_SESSION['logado']) || $_SESSION['logado'] != true){
	header("Location: usuario.php?fun=logar");
	exit();
}

include_once("visao/topo.php");
include_once("modelo/mesa/MesaDAO_class.php");

$dao = new MesaDAO();
$mesas = $dao->listar();

$total_mesas = count($mesas);
$mesas_livres = 0;
$mesas_ocupadas = 0;

foreach($mesas as $mesa){
    if($mesa['status'] == 'disponivel'){
        $mesas_livres++;
    } elseif($mesa['status'] == 'ocupada'){
        $mesas_ocupadas++;
    }
}
?>

<style>
    .dashboard-header {
        text-align: center;
        margin-bottom: 40px;
    }
    .dashboard-header h1 {
        color: #1E293B;
        font-size: 36px;
        margin-bottom: 10px;
    }
    .stats-container {
        display: flex;
        justify-content: center;
        gap: 30px;
        margin-bottom: 40px;
    }
    .stat-card {
        background: linear-gradient(135deg, #2563EB 0%, #1E40AF 100%);
        color: #FFFFFF;
        padding: 20px 30px;
        border-radius: 10px;
        text-align: center;
        min-width: 150px;
        box-shadow: 0 4px 12px rgba(15,23,42,.05);
    }
    .stat-card.total {
        background: linear-gradient(135deg, #2563EB 0%, #1E40AF 100%);
    }
    .stat-card.disponivel {
        background: linear-gradient(135deg, #22C55E 0%, #16A34A 100%);
    }
    .stat-card.ocupada {
        background: linear-gradient(135deg, #F97316 0%, #EA580C 100%);
    }
    .stat-number {
        font-size: 36px;
        font-weight: bold;
        display: block;
    }
    .stat-label {
        font-size: 14px;
        opacity: 0.9;
    }
    .mesas-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
        gap: 20px;
        margin-top: 30px;
    }
    .mesa-card {
        background: #FFFFFF;
        border-radius: 10px;
        padding: 20px;
        box-shadow: 0 4px 12px rgba(15,23,42,.05);
        border: 1px solid #E2E8F0;
        cursor: pointer;
        transition: transform 0.2s, box-shadow 0.2s;
        border-left: 5px solid;
    }
    .mesa-card:hover {
        transform: translateY(-3px);
        box-shadow: 0 10px 30px rgba(37,99,235,.10);
    }
    .mesa-card.disponivel {
        border-left-color: #22C55E;
    }
    .mesa-card.ocupada {
        border-left-color: #F97316;
    }
    .mesa-card.reservada {
        border-left-color: #EAB308;
    }
    .mesa-card.limpeza {
        border-left-color: #3B82F6;
    }
    .mesa-card.manutencao {
        border-left-color: #64748B;
    }
    .mesa-number {
        font-size: 24px;
        font-weight: bold;
        color: #1E293B;
        margin-bottom: 10px;
    }
    .mesa-info {
        font-size: 14px;
        color: #64748B;
        margin-bottom: 5px;
    }
    .mesa-status {
        display: inline-block;
        padding: 4px 12px;
        border-radius: 12px;
        font-size: 12px;
        font-weight: bold;
        margin-top: 10px;
    }
    .mesa-status.disponivel {
        background-color: #DCFCE7;
        color: #166534;
    }
    .mesa-status.ocupada {
        background-color: #FFEDD5;
        color: #9A3412;
    }
    .mesa-status.reservada {
        background-color: #FEF3C7;
        color: #854D0E;
    }
    .mesa-status.limpeza {
        background-color: #DBEAFE;
        color: #1E40AF;
    }
    .mesa-status.manutencao {
        background-color: #E2E8F0;
        color: #334155;
    }
    .section-title {
        color: #1E293B;
        font-size: 24px;
        margin: 30px 0 20px;
        padding-bottom: 10px;
        border-bottom: 2px solid #2563EB;
    }
</style>

<div class="dashboard-header">
    <h1>🪑 Dashboard de Mesas</h1>
    <p style="color: #64748B;">Visão geral do status das mesas do restaurante</p>
</div>

<div class="stats-container">
    <div class="stat-card total">
        <span class="stat-number"><?php echo $total_mesas; ?></span>
        <span class="stat-label">Total de Mesas</span>
    </div>
    <div class="stat-card disponivel">
        <span class="stat-number"><?php echo $mesas_livres; ?></span>
        <span class="stat-label">Mesas Disponíveis</span>
    </div>
    <div class="stat-card ocupada">
        <span class="stat-number"><?php echo $mesas_ocupadas; ?></span>
        <span class="stat-label">Mesas Ocupadas</span>
    </div>
</div>

<?php if($total_mesas > 0): ?>
    <h2 class="section-title">Todas as Mesas</h2>
    <div class="mesas-grid">
        <?php foreach($mesas as $mesa): ?>
            <div class="mesa-card <?php echo strtolower(str_replace('ã', 'a', $mesa['status'])); ?>" onclick="window.location.href='mesa.php?fun=exibir&id=<?php echo $mesa['id_mesa']; ?>'">
                <div class="mesa-number">Mesa <?php echo $mesa['numero']; ?></div>
                <div class="mesa-info">👥 <?php echo $mesa['capacidade']; ?> pessoas</div>
                <div class="mesa-info">📍 <?php echo $mesa['localizacao']; ?></div>
                <span class="mesa-status <?php echo strtolower(str_replace('ã', 'a', $mesa['status'])); ?>">
                    <?php echo ucfirst($mesa['status']); ?>
                </span>
            </div>
        <?php endforeach; ?>
    </div>
<?php else: ?>
    <div style="text-align: center; padding: 40px; color: #64748B;">
        <h3>Nenhuma mesa cadastrada</h3>
        <p><a href="mesa.php?fun=cadastrar" style="color: #2563EB;">Cadastrar primeira mesa →</a></p>
    </div>
<?php endif; ?>

<?php
include_once("visao/base.php");
?>
