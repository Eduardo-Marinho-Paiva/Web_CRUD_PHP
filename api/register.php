<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/standart.css">
    <link rel="stylesheet" href="../css/register.css">
    <title>D3TEC - Cadastro</title>
</head>

<body>
    <script>
        function phone_formater(phone_input){
            // Formata a str do telefone para o formato ()xxxxx-xxxx
            var phone = phone_input.value.replace(/\D/g, ''); // retirar caracteres não numéricos
            phone = phone.replace(/(\d{2})(\d{5})(\d{4})/, '($1)$2-$3'); //Inserir () e - 
            phone_input.value = phone;
        }
    </script>
    <form class = "container" action="register_processing.php" method="post">
        <div class="icon">
            <img src="../imgs/user_icon.png" alt="Icone">
        </div>

        <div class="input-group">
            <div class="input">
            <div class="input-prefix">Usuário</div>
                <input type="text" name="user" required placeholder="Digite seu nome de usuário">
            </div>
            <div class="input">
                <div class="input-prefix">Senha</div>
                <input type="password" name="password" required placeholder="Digite a sua senha">
            </div>
            <div class="input">
                <div class="input-prefix">Telefone</div>
                <input type="text" name="phone" required placeholder="Digite o seu telefone (apenas números)" maxlength="11" onkeyup="phone_formater(this)">
            </div>
            <div class="input">
                <div class="input-prefix">Email</div>
                <input type="email" name="email" required placeholder="Digite seu melhor email">
            </div>
        </div>

        <div class="register-button-group">
            <div class="button">
                <input type="submit" name ="submit-button" value="Cadastrar">
            </div>
        </div>

        <div class="link">
            <a href="index.php">Já sou cadastrado</a>
        </div>
    </form>
    
</body>
</html>
