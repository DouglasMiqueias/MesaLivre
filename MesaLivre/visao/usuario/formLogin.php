<style>
    .login-container {
        max-width: 400px;
        margin: 50px auto;
        padding: 30px;
        background-color: white;
        border-radius: 8px;
        box-shadow: 0 4px 10px rgba(0,0,0,0.1);
    }
    .login-container h2 {
        color: #dc3545;
        text-align: center;
        margin-bottom: 30px;
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
        color: #333;
        font-weight: bold;
    }
    .form-group input[type="email"],
    .form-group input[type="password"] {
        width: 100%;
        padding: 12px;
        border: 2px solid #ddd;
        border-radius: 4px;
        font-size: 14px;
        transition: border-color 0.3s;
    }
    .form-group input:focus {
        outline: none;
        border-color: #dc3545;
    }
    .btn-login {
        width: 100%;
        background-color: #dc3545;
        color: white;
        padding: 14px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        font-size: 16px;
        font-weight: bold;
        transition: background-color 0.3s;
    }
    .btn-login:hover {
        background-color: #b02a37;
    }
    .error-message {
        background-color: #f8d7da;
        color: #721c24;
        padding: 12px;
        border-radius: 4px;
        margin-bottom: 20px;
        border: 1px solid #f5c6cb;
        text-align: center;
    }
    .login-footer {
        text-align: center;
        margin-top: 20px;
        color: #666;
    }
    .login-footer a {
        color: #dc3545;
        text-decoration: none;
    }
    .login-footer a:hover {
        text-decoration: underline;
    }
</style>

<div class="login-container">
    <div class="login-logo">🔐</div>
    <h2>MesaLivre</h2>
    <p style="text-align: center; color: #666; margin-bottom: 30px;">Sistema de Reservas de Mesas</p>
    
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
