<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MesaLivre - Sistema de Reservas</title>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <link rel="stylesheet" href="assets/css/visao/exibir.css">
    <link rel="stylesheet" href="assets/css/visao/alterar.css">
    <link rel="stylesheet" href="assets/css/visao/cadastrar.css">
    <link rel="stylesheet" href="assets/css/visao/listar.css">
    <link rel="stylesheet" href="assets/css/visao/excluir.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background-color: #f8fafc;
            display: flex;
            min-height: 100vh;
            color: #1e293b;
        }
        .sidebar {
            width: 260px;
            background-color: #172554;
            color: white;
            display: flex;
            flex-direction: column;
            position: fixed;
            height: 100vh;
            left: 0;
            top: 0;
            box-shadow: 4px 0 24px rgba(0, 0, 0, 0.08);
            z-index: 1000;
        }
        .sidebar-header {
            padding: 24px;
            border-bottom: 1px solid rgba(255, 255, 255, 0.15);
            display: flex;
            flex-direction: column;
            gap: 4px;
        }
        .sidebar-header h1 {
            font-size: 24px;
            font-weight: 700;
            letter-spacing: -0.5px;
            display: flex;
            align-items: center;
            gap: 10px;
            color: #ffffff;
        }
        .sidebar-header p {
            font-size: 10px;
            text-transform: uppercase;
            letter-spacing: 0.08em;
            color: rgba(255, 255, 255, 0.7);
            font-weight: 600;
        }
        .sidebar-nav {
            flex: 1;
            padding: 20px 12px;
            overflow-y: auto;
            -ms-overflow-style: none;  /* IE and Edge */
            scrollbar-width: none;  /* Firefox */
        }
        .sidebar-nav::-webkit-scrollbar {
            display: none; /* Chrome, Safari and Opera */
        }
        .sidebar-nav ul {
            list-style: none;
        }
        .sidebar-nav li {
            margin-bottom: 4px;
        }
        .sidebar-nav a {
            color: rgba(255, 255, 255, 0.85);
            text-decoration: none;
            padding: 12px 16px;
            display: flex;
            align-items: center;
            gap: 12px;
            border-radius: 8px;
            font-size: 14px;
            font-weight: 500;
            transition: all 0.2s cubic-bezier(0.4, 0, 0.2, 1);
            border-left: 3px solid transparent;
        }
        .sidebar-nav a i {
            font-size: 1.15rem;
            opacity: 0.9;
            transition: transform 0.2s ease;
        }
        .sidebar-nav a:hover {
            background-color: rgba(255, 255, 255, 0.08);
            color: #ffffff;
            transform: translateX(4px);
        }
        .sidebar-nav a:hover i {
            opacity: 1;
        }
        .sidebar-nav a.active {
            background-color: #2563EB;
            color: #ffffff;
            border-left-color: #ffffff;
            font-weight: 600;
            padding-left: 13px; /* Compensates for the 3px border-left */
        }
        .sidebar-nav a.active i {
            opacity: 1;
        }
        .sidebar-footer {
            padding: 20px 16px;
            border-top: 1px solid rgba(255, 255, 255, 0.15);
            background-color: rgba(0, 0, 0, 0.05);
        }
        .user-info {
            display: flex;
            align-items: center;
            gap: 12px;
            margin-bottom: 16px;
        }
        .user-avatar {
            width: 36px;
            height: 36px;
            border-radius: 50%;
            background-color: #ffffff;
            color: #2563EB;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 700;
            font-size: 14px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.05);
        }
        .user-meta {
            display: flex;
            flex-direction: column;
        }
        .user-name {
            color: #ffffff;
            font-weight: 600;
            font-size: 14px;
        }
        .user-role {
            color: rgba(255, 255, 255, 0.7);
            font-size: 11px;
            font-weight: 500;
            margin-top: 1px;
        }
        .btn-logout {
            background-color: rgba(255, 255, 255, 0.15);
            color: #ffffff;
            padding: 10px 16px;
            border-radius: 8px;
            text-decoration: none;
            font-weight: 600;
            font-size: 13px;
            transition: all 0.2s ease;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            border: 1px solid rgba(255, 255, 255, 0.2);
        }
        .btn-logout:hover {
            background-color: #ffffff;
            color: #2563EB;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }
        .btn-logout:hover i {
            transform: translateX(2px);
        }
        .btn-logout i {
            transition: transform 0.2s ease;
        }
        .main-content {
            flex: 1;
            margin-left: 260px;
            padding: 40px;
            min-height: 100vh;
        }
        .content-area {
            max-width: 1200px;
            margin: 0 auto;
            padding: 40px;
            background-color: #FFFFFF;
            border-radius: 16px;
            box-shadow: 0 4px 12px rgba(15,23,42,.05);
            border: 1px solid #E2E8F0;
            min-height: 500px;
        }
    </style>
</head>
<body>
    <div class="sidebar">
        <div class="sidebar-header">
            <h1><i class="bi bi-grid-3x3-gap-fill" style="font-size: 20px; vertical-align: middle;"></i> MesaLivre</h1>
            <p>Sistema de Reservas</p>
        </div>
        <nav class="sidebar-nav">
            <ul>
                <?php
                if(isset($_SESSION['logado']) && $_SESSION['logado'] == true){
                    $currentPage = basename($_SERVER['PHP_SELF']);
                    
                    $menuItems = [
                        ['index.php', 'bi bi-grid-1x2-fill', 'Dashboard'],
                        ['mesa.php?fun=listar', 'bi bi-layout-three-columns', 'Mesas', 'mesa.php'],
                        ['cliente.php?fun=listar', 'bi bi-people-fill', 'Clientes', 'cliente.php'],
                        ['produto.php?fun=listar', 'bi bi-box-seam-fill', 'Produtos', 'produto.php'],
                        ['reserva.php?fun=listar', 'bi bi-calendar-event-fill', 'Reservas', 'reserva.php'],
                        ['pedido.php?fun=listar', 'bi bi-receipt-cutoff', 'Pedidos - f', 'pedido.php'],
                        ['relatorio.php?fun=listar', 'bi bi-bar-chart-line-fill', 'Relatórios - f', 'relatorio.php'],
                        ['usuario.php?fun=listar', 'bi bi-person-badge-fill', 'Usuários - f', 'usuario.php'],
                        ['configuracao.php?fun=listar', 'bi bi-gear-fill', 'Configurações - f', 'configuracao.php'],
                    ];

                    foreach ($menuItems as $item) {
                        $href = $item[0];
                        $icon = $item[1];
                        $label = $item[2];
                        $basePage = isset($item[3]) ? $item[3] : $href;
                        
                        $activeClass = ($currentPage == $basePage) ? 'active' : '';
                        echo '<li><a href="' . $href . '" class="' . $activeClass . '"><i class="' . $icon . '"></i> ' . $label . '</a></li>';
                    }
                }
                ?>
            </ul>
        </nav>
        <div class="sidebar-footer">
            <?php
            if(isset($_SESSION['logado']) && $_SESSION['logado'] == true){
                include_once("modelo/usuario/Usuario_class.php");
                $usuario = unserialize($_SESSION['usuario']);
                $primeiraLetra = mb_strtoupper(mb_substr($usuario->getNome(), 0, 1));
                
                echo '<div class="user-info">';
                echo '  <div class="user-avatar">' . $primeiraLetra . '</div>';
                echo '  <div class="user-meta">';
                echo '    <span class="user-name">' . $usuario->getNome() . '</span>';
                echo '    <span class="user-role">Painel de Controle</span>';
                echo '  </div>';
                echo '</div>';
                echo '<a href="usuario.php?fun=logout" class="btn-logout"><i class="bi bi-box-arrow-right"></i> Sair</a>';
            }
            ?>
        </div>
    </div>
    <div class="main-content">
        <div class="content-area">
