<?php 
    require_once 'db_conection.php';

    // Receber os dados do formulario
    if(isset($_POST['user'])){
        $user = $_POST['user'];
    }
    if(isset($_POST['password'])){
        $password = $_POST['password'];
    }
    if(isset($_POST['phone'])){
        $phone = $_POST['phone'];
    }
    if(isset($_POST['email'])){
        $email = $_POST['email'];
    }

    $query_pre_register = "SELECT name FROM user WHERE name = '$user'";
    $pre_register_result = mysqli_query($db_conection,$query_pre_register);
    if(mysqli_num_rows($pre_register_result) > 0){ 
        // Nome de Usuário já utilizado
        echo "<script>
            alert('Esse Nome de Usuário já está cadastrado, por favor utilize outro!');
            window.location.href = 'register.php'; // Redireciona para a página de registro
        </script>";
    }else{
        //Nome de Usuário Livre
        $hash_password = password_hash($password,PASSWORD_DEFAULT);    
        $query = "INSERT INTO user (name,password,phone,email) VALUES ('$user','$hash_password','$phone','$email')";

        // Realizando & testando a inserção
        if (mysqli_query($db_conection, $query)) {
            // Se a inserção for bem-sucedida
            echo "<script>
                alert('Cadastro realizado com sucesso!');
                window.location.href = 'index.php'; // Redireciona para a página de login
            </script>";
        } else {
            // Se a inserção falhar
            echo "<script>
                alert('Erro ao cadastrar usuário. Tente novamente.');
                window.location.href = 'register.php' 
            </script>";
        }
    }
?>