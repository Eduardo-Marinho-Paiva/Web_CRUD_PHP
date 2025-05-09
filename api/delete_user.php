<?php 
    require_once 'db_conection.php';

    if(isset($_GET['id'])){
        $user_id = $_GET['id'];
    }

    $query = "DELETE FROM user WHERE id = '$user_id'";
    if($query_result = mysqli_query($db_conection,$query)){
        // Sucesso
        echo 
        "<script>
            window.location.href = 'show_users.php';
        </script>";
    }else{
        // Erro
        echo "<script>
            alert('Erro no processo de Deleção de Usuário !');
            window.location.href = 'show_users.php';
        </script>";
    }

?>