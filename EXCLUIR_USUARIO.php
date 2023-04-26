<?php
// verificar se o usuário está logado
session_start();

if (!isset($_SESSION["id"])) {
	header("Location: login.php");
	exit();
}

// conectar-se ao banco de dados
include("config.php");

// verificar se o usuário confirmou a exclusão
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	if ($_POST["confirmacao"] == "sim") {
		// excluir o usuário do banco de dados
		$id = $_SESSION["id"];
		$sql = "DELETE FROM tbusuarios WHERE id=$id";

		if (mysqli_query($conn, $sql)) {
			// encerrar a sessão
			session_destroy();
			echo"<script> alert('Usuário excluído com sucesso.'); </script>"; 
			echo"<script> location.href='index.php'; </script>"; 
		} else {
			echo "Erro ao excluir usuário: " . mysqli_error($conn);
		}

		exit();
	}
}

// exibir a mensagem de confirmação
?>

<!DOCTYPE html>
<html>

<head>
	<link rel="stylesheet" href="css/excluirUsuario.css">
	<title>Excluir cadastro</title>
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
		<form id="formulario" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
			<h1 id="titulo-formulario">Excluir cadastro</h1>
			<p>Tem certeza que deseja excluir sua conta?</p>
			<div id="container-radio">
				<div>
					<input class = "input-radio"type="radio" name="confirmacao" value="sim">Sim<br>
				</div>
				<div>
					<input class = "input-radio"type="radio" name="confirmacao" value="nao" checked>Não<br>
				</div>
			</div>
			<input id ="btn-excluir"type="submit" name="submit" value="Excluir">
		</form>
	</main>
	<footer id="rodape">
		&copy;Todos os direitos reservados ao Colégio ULBRA São Lucas.
	</footer>
</body>

</html>