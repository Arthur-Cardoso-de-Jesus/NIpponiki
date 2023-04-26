<?php
// verificar se o usuário está logado
session_start();

if (!isset($_SESSION["id"])) {
	header("Location: login.php");
	exit();
}

// exibir as informações do usuário logado
$id = $_SESSION["id"];
$nome = $_SESSION["nome"];
$email = $_SESSION["email"];
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/perfil.css">
	<title>Perfil</title>
</head>

<body>
	<header>
		<br>
		<a href="paginaPortal.php"> <img src="img/logotest3.png" alt="logo" height="60" width="60"></a>
		<div>
			<h1>SEU PERFIL</h1>
		</div>
		<nav>
			<a href="paginaPortal.php"><button class="botoes">Portal</button></a>
			<a href="logout.php"><button class="botoes">Sair</button></a>
		</nav>
	</header>

	<main id="container-principal">
		<div id="container-perfil">
			<div id="container-titulo">
				<h1>Seu perfil</h1>
			</div>
			<div id="container-dados">
				<p>ID:
					<?php echo $id; ?>
				</p>
				<p>Nome:
					<?php echo $nome; ?>
				</p>
				<p>Email:
					<?php echo $email; ?>
				</p>
			</div>
			<div id="container-links">
				<div>
					<p><a class="links" href="editar_usuario.php">Editar cadastro</a></p>
				</div>
				<div>
					<p><a class="links" href="excluir_usuario.php">Excluir cadastro</a></p>
				</div>
			</div>
		</div>
	</main>
	<footer id="rodape">
		&copy;Todos os direitos reservados ao Colégio ULBRA São Lucas.
	</footer>
</body>

</html>