<?php 
    require_once 'db_conection.php';
    $query = "SELECT * FROM user";
    $query_result = mysqli_query($db_conection,$query);
    $number_of_rows = mysqli_num_rows($query_result);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>D3tec - Usuários</title>
    <link rel="stylesheet" href="../css/show_users.css">
</head>
<body>
    <nav class="navbar">
        <ul>
            <li><a href="home.php">Home</a></li>
            <li><a href="show_users.php">Lista de Usuários</a></li>
        </ul>
    </nav>

    <table class="user-table">
        <thead>
            <tr>
                <th class="table-header">Usuário</th>
                <th class="table-header">Telefone</th>
                <th class="table-header">Email</th>
                <th class="table-header">Editar</th>
                <th class="table-header">Excluir</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                for ($i = 0; $i < $number_of_rows; $i++) { 
                    $query_row = mysqli_fetch_assoc($query_result);
                    $user_id = $query_row['id']; // Supondo que tenha um 'id' único para cada usuário
                    echo "
                    <tr class='user-row'>
                        <td class='user-name'>" . $query_row['name'] . "</td>
                        <td class='user-phone'>" . $query_row['phone'] . "</td>
                        <td class='user-email'>" . $query_row['email'] . "</td>
                        <td class='user-edit'><a href='edit_user.php?id=$user_id'>✏️</a></td>
                        <td class='user-delete'><a href='delete_user.php?id=$user_id'>🗑️</a></td>
                    </tr>";
                }
            ?>
        </tbody>
    </table>

</body>
</html>
