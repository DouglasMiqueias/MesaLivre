<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - MesaLivre</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #2563EB 0%, #1E40AF 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0;
            padding: 20px;
        }
        .login-container {
            max-width: 400px;
            width: 100%;
            padding: 40px;
            background-color: #FFFFFF;
            border-radius: 12px;
            box-shadow: 0 20px 50px rgba(15,23,42,.18);
        }
        .login-container h2 {
            color: #1E293B;
            text-align: center;
            margin-bottom: 10px;
            font-size: 28px;
        }
        .login-logo {
            text-align: center;
            margin-bottom: 20px;
            font-size: 48px;
        }
        .form-group {
            margin-bottom: 20px;
        }
        .form-group label {
            display: block;
            margin-bottom: 8px;
            color: #334155;
            font-weight: bold;
        }
        .form-group input[type="email"],
        .form-group input[type="password"] {
            width: 100%;
            padding: 12px;
            border: 1px solid #CBD5E1;
            border-radius: 6px;
            font-size: 14px;
            transition: border-color 0.3s, box-shadow 0.3s;
            box-sizing: border-box;
        }
        .form-group input:hover {
            border-color: #60A5FA;
        }
        .form-group input:focus {
            outline: none;
            border-color: #2563EB;
            box-shadow: 0 0 0 4px rgba(37,99,235,.15);
        }
        .form-group input::placeholder {
            color: #94A3B8;
        }
        .btn-login {
            width: 100%;
            background-color: #2563EB;
            color: #FFFFFF;
            padding: 14px;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            font-size: 16px;
            font-weight: bold;
            transition: background-color 0.3s;
        }
        .btn-login:hover {
            background-color: #1D4ED8;
        }
        .btn-login:active {
            background-color: #1E40AF;
        }
        .error-message {
            background-color: #FEE2E2;
            color: #991B1B;
            padding: 12px;
            border-radius: 6px;
            margin-bottom: 20px;
            border: 1px solid #FECACA;
            text-align: center;
        }
        .login-footer {
            text-align: center;
            margin-top: 20px;
            color: #64748B;
        }
        .login-footer a {
            color: #2563EB;
            text-decoration: none;
        }
        .login-footer a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="login-container">
    <div class="login-logo">🔐</div>
    <h2>MesaLivre</h2>
    <p style="text-align: center; color: #64748B; margin-bottom: 30px;">Sistema de Reservas de Mesas</p>
    
    <?php
    if(isset($erro)){
        echo "<div class='error-message'>" . $erro . "</div>";
    }
    ?>
    
    <form action="usuario.php?fun=logar" method="POST">
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" placeholder="Digite seu email" required autofocus>
        </div>
        
        <div class="form-group">
            <label for="senha">Senha:</label>
            <input type="password" name="senha" id="senha" placeholder="Digite sua senha" required>
        </div>
        
        <button type="submit" name="entrar" class="btn-login">Entrar</button>
    </form>
    
    <div class="login-footer">
        <p>Usuário padrão: <strong>iftm</strong></p>
        <p><a href="index.php">← Voltar para página inicial</a></p>
    </div>
</div>
</body>
</html>
