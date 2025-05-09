<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/standart.css">
    <title>D3TEC - Login</title>
</head>
<body>
    <form class = "container" action="login_processing.php" method="post">
        <div class="icon">
            <img src="../imgs/user_icon.png" alt="Icone">
        </div>
        <div class="input-group">
            <div class="input">
                <div class="input-prefix">Usuário</div>
                <input type="text" name="user" required placeholder="Digite seu nome de usuário ou email">
            </div>
            <div class="input">
            <div class="input-prefix">Senha</div>
                <input type="password" name="password" required placeholder="Digite a sua senha">
            </div>
        </div>
        <div class="button-group">
            <div class="button">
                <input type="submit" name ="submit-button" value="Entrar">
            </div>
            <div class="button">
                <a href="register.php">Não Tenho Cadastro</a>
            </div>
        </div>
        <div class="link">
            <a href="recover_password.php">Esqueci Minha Senha</a>
        </div>
    </form>
</body>
</html>

