<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MesaLivre - Sistema de Reservas</title>
    <link rel="stylesheet" href="../assets/css/visao/exibir.css">
    <link rel="stylesheet" href="../assets/css/visao/alterar.css">
    <link rel="stylesheet" href="../assets/css/visao/cadastrar.css">
    <link rel="stylesheet" href="../assets/css/visao/listar.css">
    <link rel="stylesheet" href="../assets/css/visao/excluir.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            min-height: 100vh;
        }
        .sidebar {
            width: 250px;
            background-color: #dc3545;
            color: white;
            display: flex;
            flex-direction: column;
            position: fixed;
            height: 100vh;
            left: 0;
            top: 0;
        }
        .sidebar-header {
            padding: 30px 20px;
            border-bottom: 1px solid rgba(255,255,255,0.1);
        }
        .sidebar-header h1 {
            font-size: 28px;
            margin-bottom: 5px;
        }
        .sidebar-header p {
            font-size: 12px;
            opacity: 0.8;
        }
        .sidebar-nav {
            flex: 1;
            padding: 20px 0;
        }
        .sidebar-nav ul {
            list-style: none;
        }
        .sidebar-nav li {
            margin-bottom: 5px;
        }
        .sidebar-nav a {
            color: white;
            text-decoration: none;
            padding: 15px 20px;
            display: block;
            transition: background-color 0.3s;
            border-left: 4px solid transparent;
        }
        .sidebar-nav a:hover {
            background-color: #b02a37;
            border-left-color: #fff;
        }
        .sidebar-nav a.active {
            background-color: #b02a37;
            border-left-color: #fff;
        }
        .sidebar-footer {
            padding: 20px;
            border-top: 1px solid rgba(255,255,255,0.1);
        }
        .user-info {
            display: flex;
            align-items: center;
            gap: 10px;
            margin-bottom: 15px;
        }
        .user-name {
            background-color: rgba(255,255,255,0.2);
            padding: 8px 12px;
            border-radius: 5px;
            font-weight: bold;
            font-size: 14px;
        }
        .btn-logout {
            background-color: #fff;
            color: #dc3545;
            padding: 10px 20px;
            border-radius: 5px;
            text-decoration: none;
            font-weight: bold;
            transition: background-color 0.3s;
            display: block;
            text-align: center;
        }
        .btn-logout:hover {
            background-color: #f8f9fa;
        }
        .main-content {
            flex: 1;
            margin-left: 250px;
            padding: 30px;
        }
        .content-area {
            max-width: 1200px;
            margin: 0 auto;
            padding: 40px;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
            min-height: 400px;
        }
    </style>
</head>
<body>
    <div class="sidebar">
        <div class="sidebar-header">
            <h1>MesaLivre</h1>
            <p>Sistema de Reservas</p>
        </div>
        <nav class="sidebar-nav">
            <ul>
                <?php
                if(isset($_SESSION['logado']) && $_SESSION['logado'] == true){
                    echo '<li><a href="index.php">🏠 Início</a></li>';
                    echo '<li><a href="cliente.php?fun=listar">👥 Clientes</a></li>';
                    echo '<li><a href="produto.php?fun=listar">📦 Produtos</a></li>';
                    echo '<li><a href="mesa.php?fun=listar">🪑 Mesas</a></li>';
                    echo '<li><a href="reserva.php?fun=listar">📝 Reservas</a></li>';
                }
                ?>
            </ul>
        </nav>
        <div class="sidebar-footer">
            <?php
            if(isset($_SESSION['logado']) && $_SESSION['logado'] == true){
                include_once("modelo/usuario/Usuario_class.php");
                $usuario = unserialize($_SESSION['usuario']);
                echo '<div class="user-info">';
                echo '<span class="user-name">👤 ' . $usuario->getNome() . '</span>';
                echo '</div>';
                echo '<a href="usuario.php?fun=logout" class="btn-logout">Sair</a>';
            }
            ?>
        </div>
    </div>
    <div class="main-content">
        <div class="content-area">
