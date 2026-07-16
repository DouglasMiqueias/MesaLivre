<?php
session_start();

if(!isset($_SESSION['logado']) || $_SESSION['logado'] != true){
	header("Location: ../landing.php");
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
    if($mesa['status'] == 'livre'){
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
        color: #dc3545;
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
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        color: white;
        padding: 20px 30px;
        border-radius: 10px;
        text-align: center;
        min-width: 150px;
        box-shadow: 0 4px 6px rgba(0,0,0,0.1);
    }
    .stat-card.total {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    }
    .stat-card.livre {
        background: linear-gradient(135deg, #11998e 0%, #38ef7d 100%);
    }
    .stat-card.ocupada {
        background: linear-gradient(135deg, #eb3349 0%, #f45c43 100%);
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
        background: white;
        border-radius: 10px;
        padding: 20px;
        box-shadow: 0 2px 8px rgba(0,0,0,0.1);
        cursor: pointer;
        transition: transform 0.2s, box-shadow 0.2s;
        border-left: 5px solid;
    }
    .mesa-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 4px 12px rgba(0,0,0,0.15);
    }
    .mesa-card.livre {
        border-left-color: #27ae60;
    }
    .mesa-card.ocupada {
        border-left-color: #dc3545;
    }
    .mesa-card.reservada {
        border-left-color: #ffc107;
    }
    .mesa-card.manutencao {
        border-left-color: #6c757d;
    }
    .mesa-number {
        font-size: 24px;
        font-weight: bold;
        color: #2c3e50;
        margin-bottom: 10px;
    }
    .mesa-info {
        font-size: 14px;
        color: #666;
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
    .mesa-status.livre {
        background-color: #d4edda;
        color: #155724;
    }
    .mesa-status.ocupada {
        background-color: #f8d7da;
        color: #721c24;
    }
    .mesa-status.reservada {
        background-color: #fff3cd;
        color: #856404;
    }
    .mesa-status.manutencao {
        background-color: #e2e3e5;
        color: #383d41;
    }
    .section-title {
        color: #2c3e50;
        font-size: 24px;
        margin: 30px 0 20px;
        padding-bottom: 10px;
        border-bottom: 2px solid #dc3545;
    }
</style>

<div class="dashboard-header">
    <h1>🪑 Dashboard de Mesas</h1>
    <p style="color: #666;">Visão geral do status das mesas do restaurante</p>
</div>

<div class="stats-container">
    <div class="stat-card total">
        <span class="stat-number"><?php echo $total_mesas; ?></span>
        <span class="stat-label">Total de Mesas</span>
    </div>
    <div class="stat-card livre">
        <span class="stat-number"><?php echo $mesas_livres; ?></span>
        <span class="stat-label">Mesas Livres</span>
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
    <div style="text-align: center; padding: 40px; color: #666;">
        <h3>Nenhuma mesa cadastrada</h3>
        <p><a href="mesa.php?fun=cadastrar" style="color: #dc3545;">Cadastrar primeira mesa →</a></p>
    </div>
<?php endif; ?>

<?php
include_once("visao/base.php");
?>
