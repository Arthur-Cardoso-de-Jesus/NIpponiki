<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/cadastro.css">
    <title>Cadastro</title>
</head>

<body>
    <form id="formulario" action="CAD.php" method="post">
        <div id = "logo">
        <img src="img/logotest3.png" id="logoImg">
        </div>
        <h1 id="titulo-formulario">Cadastro</h1>
        <input class="inputs" type="text" name="nome" id="nome" placeholder="Nome" required>
        <input class="inputs" type="email" name="email" id="email" placeholder="E-Mail" required>
        <input class="inputs" type="password" name="senha" id="senha" placeholder="Senha" required>
        <input id="btn-salvar" type="submit" value="Salvar">
    </form>
</body>

</html>