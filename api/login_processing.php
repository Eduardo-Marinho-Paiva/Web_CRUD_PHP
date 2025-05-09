<?php 
    require_once 'db_conection.php';
    if(isset($_POST['user'])){
        $user = $_POST['user']; //Pode ser User Name ou Eail
    }
    if(isset($_POST['password'])){
        $password = $_POST['password'];
    }

    if(filter_var($user,FILTER_VALIDATE_EMAIL)){
        // É um email
        $query = "SELECT password FROM user WHERE '$user' = email";
    }
    else{
        // Não é um email
        $query = "SELECT password FROM user WHERE '$user' = name";
    }
    $query_result = mysqli_query($db_conection,$query);

    //Testar se o usuário existe
    if(mysqli_num_rows($query_result) > 0 ){ 
        //usuário encontrado.
        $query_row = mysqli_fetch_assoc($query_result);

        if(password_verify($password,$query_row['password'])){
            // Válido
            echo "<script>
            window.location.href = 'home.php'; // Redireciona para a página Inicial
        </script>";
        }
        else{
            //Inválido
            echo "<script>
            alert('Senha Incorreta, Tente Novamente!');
            window.location.href = 'index.php'; // Redireciona para a página de login
        </script>";
        }

    }
    else{ 
        //usuário não encontrado.
        echo "<script>
            alert('Usuário Não Encontrado!');
            window.location.href = 'index.php'; 
        </script>";
    }
?>