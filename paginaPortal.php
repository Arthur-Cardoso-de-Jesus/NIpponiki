<?php
  session_start();
  if(empty($_SESSION)){
    echo"<script> location.href='index.php'; </script>"; 
  }
  ?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="css/portal.css">
    <title>Portal Anime</title>
</head>

<body>
    <header>
        <br>
        <img src="img/logotest3.png" id="logo" alt="logo" height="60" width="60">
        <h1>PORTAL ANIME</h1>
        <nav>
            <a href="paginaPerfil.php"> <button class = "botoes">Perfil</button></a>
            <a href="logout.php"> <button class = "botoes">Sair</button></a>
        </nav>
    </header>
   
        <form action="">
            
                <p> Coloque o nome do anime desejado e clique na lupa ao lado direito da barra.</p>
            
        </form>

        <div class="container">
        <div id = "container-pesquisa">
            <input id = "buscaInput" type="text" placeholder="Pesquise seus animes favoritos!" name = "pesquisa" >
            <button id = "btn-pesquisar" onclick="buscarAnime()"><img id = "img-btn-pesquisar"src="img/lupa.png" alt=""></button>
        </div>
    </div>

      
        <div id="conteudo">
        <div id="resultadoBusca">
        

        <div id="imagem"></div>
        </div>
        </div>

    <footer>
        <div>&copy;<span> </span><span> Nipponiki, All rights reserved.</span></div>
    </footer>


    <script src="js/apijs.js"></script>
</body>

</html>