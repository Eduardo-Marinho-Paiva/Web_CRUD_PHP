<?php 
    require_once 'db_conection.php';

    if(isset($_POST['name'])){
        $user = $_POST['name'];
    }
    if(isset($_POST['id'])){
        $id = $_POST['id'];
    }
    if(isset($_POST['phone'])){
        $phone = $_POST['phone'];
    }
    if(isset($_POST['email'])){
        $email = $_POST['email'];
    }

    $query = "UPDATE user SET name = '$user', phone = '$phone', email = '$email' WHERE id = '$id'";
    if($query_result = mysqli_query($db_conection,$query)){
        echo "<script>
            window.location.href = 'show_users.php';
        </script>";
    }else{
        echo "<script>
            alert('Erro no processo de Edição de Usuário !');
            window.location.href = 'show_users.php';
        </script>";
    }
?>