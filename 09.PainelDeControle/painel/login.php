
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Login</title>
    <link rel="stylesheet" href="<?php echo INCLUDE_PATH ?>css/style.css" />
</head>

<body>
    <div class="login-container">
        <div class="login-header">
            <h2>Bem-vindo</h2>
            <p>Faça login para continuar</p>
        </div>

        <form method="post">
            <div class="input-group">
                <label for="email">Email</label>
                <input type="email" id="email" placeholder="seuemail@exemplo.com" required>
            </div>
            <div class="input-group">
                <label for="password">Senha</label>
                <input type="password" id="password" placeholder="Sua senha" required>
            </div>

            <div class="options-group">
                <label class="remember-me">
                    <input type="checkbox">
                    <span>Lembrar-me</span>
                </label>
                <a href="#" class="forgot-password">
                    Esqueceu a senha?
                </a>
            </div>

            <button type="submit" class="btn">
                Entrar
            </button>
        </form>
    </div>

</body>

</html>