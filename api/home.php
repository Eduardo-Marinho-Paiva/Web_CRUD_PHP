<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>D3TEC - Home</title>
    <link rel="stylesheet" href="../css/home.css">
</head>
<body>

<!-- Navbar -->
<nav class="navbar">
    <ul>
        <li><a href="home.php">Home</a></li>
        <li><a href="show_users.php">Lista de Usuários</a></li>
    </ul>
</nav>

<div class="container">
    <h2>🤩Parabéns por chegar até aqui, receba a sua recompensa abaixo.👇👇</h2>
    <iframe id="video-frame" src="" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe><br><br>
    <button id="play-button">🌟Receber Recompensa🌟</button>
    <div>
        <button class="back-button" onclick="window.location.href='index.php'">Página de Login</button>
    </div>
</div>

<script>
    // Função para começar a reproduzir o vídeo quando o botão for clicado
    document.getElementById("play-button").onclick = function() {
        var videoFrame = document.getElementById("video-frame");
        videoFrame.style.display = "block"; // Torna o iframe visível
        document.getElementById("play-button").style.display = "none"; // Oculta o botão após o clique

        // Define o src do iframe para carregar o vídeo do YouTube com autoplay
        videoFrame.src = "https://www.youtube.com/embed/dQw4w9WgXcQ?autoplay=1";
    };
</script>

</body>
</html>
