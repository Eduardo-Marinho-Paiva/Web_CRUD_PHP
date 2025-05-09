<?php 
  // configurando dados do BD
  $server_name = "localhost";
  $user_name = "root";
  $server_password = "";
  $db_name = "d3tec_app";

  // Criar conexão com o BD
  $db_conection = mysqli_connect($server_name, $user_name, $server_password, $db_name);

  if (!$db_conection) {
        die("Connection failed: " . mysqli_connect_error());
  }
?>
  
