<?php 
    require_once 'db_conection.php';

    if(isset($_GET['id'])){
        $user_id = $_GET['id'];
    }

    $query = "SELECT * FROM user WHERE id = '$user_id'";
    $query_result = mysqli_query($db_conection,$query);
    if(mysqli_num_rows($query_result)> 0){
        $row = mysqli_fetch_array($query_result);
        $id = $row["id"];
        $name = $row["name"];
        $phone = $row["phone"];
        $email = $row["email"];
    }else{
        echo "<script>
            alert('Erro no processo de seleção de usuário !');
            window.location.href = 'show_users.php';
        </script>";
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/standart.css">
    <link rel="stylesheet" href="../css/register.css">
    <title>Edição Usuário</title>
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
    <form class = "container" action="edit_user_processing.php" method="post">
        <div class="icon">
            <img src="../imgs/user_icon.png" alt="Icone">
        </div>
        <input type="hidden" name="id" value=<?="$id"?>>
        <div class="input-group">
            <div class="input">
            <div class="input-prefix">Usuário</div>
                <input type="text" name="name" required value=<?="$name"?>>
            </div>
            <div class="input">
                <div class="input-prefix">Telefone</div>
                <input type="text" name="phone" required maxlength="11" value=<?=$phone?> onkeyup="phone_formater(this)">
            </div>
            <div class="input">
                <div class="input-prefix">Email</div>
                <input type="email" name="email" required value=<?=$email?>>
            </div>
        </div>

        <div class="register-button-group">
            <div class="button">
                <input type="submit" name ="submit-button" value="Editar">
            </div>
        </div>
    </form>
    
</body>
</html>
