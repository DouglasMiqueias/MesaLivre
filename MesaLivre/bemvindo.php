<?php
session_start();

if(isset($_SESSION['logado']) && $_SESSION['logado'] == true){
	header("Location: index.php");
	exit();
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bem-vindo ao MesaLivre</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #dc3545 0%, #b02a37 100%);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .welcome-container {
            text-align: center;
            color: white;
            max-width: 600px;
            padding: 40px;
        }
        .logo {
            font-size: 80px;
            margin-bottom: 20px;
        }
        h1 {
            font-size: 48px;
            margin-bottom: 20px;
        }
        p {
            font-size: 20px;
            margin-bottom: 40px;
            opacity: 0.9;
        }
        .btn-login {
            background-color: white;
            color: #dc3545;
            padding: 15px 40px;
            font-size: 18px;
            font-weight: bold;
            border: none;
            border-radius: 50px;
            cursor: pointer;
            text-decoration: none;
            display: inline-block;
            transition: transform 0.3s, box-shadow 0.3s;
        }
        .btn-login:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.2);
        }
        .features {
            margin-top: 60px;
            display: flex;
            justify-content: center;
            gap: 40px;
        }
        .feature {
            background-color: rgba(255,255,255,0.1);
            padding: 20px;
            border-radius: 10px;
            backdrop-filter: blur(10px);
        }
        .feature-icon {
            font-size: 40px;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <div class="welcome-container">
        <div class="logo">🍽️</div>
        <h1>MesaLivre</h1>
        <p>Sistema de Gerenciamento de Reservas de Mesas</p>
        <a href="usuario.php?fun=logar" class="btn-login">Fazer Login</a>
        
        <div class="features">
            <div class="feature">
                <div class="feature-icon">👥</div>
                <h3>Clientes</h3>
            </div>
            <div class="feature">
                <div class="feature-icon">📅</div>
                <h3>Reservas</h3>
            </div>
            <div class="feature">
                <div class="feature-icon">🪑</div>
                <h3>Mesas</h3>
            </div>
        </div>
    </div>
</body>
</html>
