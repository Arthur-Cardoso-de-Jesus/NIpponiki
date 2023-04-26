<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css">
    <title>Login</title>
</head>
<body>
    <div id="container">
    <form action="LOGIN.php" method="post">
        <br><br>
        <img src="img/logotest3.png" id="logo">
        <br>
        <h1>LOGIN</h1>
        <input type="text" id="email" name="email" placeholder="E-mail">
        <br> <br>
        <input type="password" id="senha" name="senha" placeholder="Senha">
        <br><br><br>
        <button>ENTRAR</button>
        <br><br>
        <p> NÃO POSSUI CONTA?  <a href="paginaCadastro.php" id="cadastrar">CADASTRE-SE</a></p>
    </form>
    </div>
</body>
</html>