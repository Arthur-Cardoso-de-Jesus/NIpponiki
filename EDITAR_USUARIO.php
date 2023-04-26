
<?php
// verificar se o usuário está logado
session_start();

if (!isset($_SESSION["id"])) {
	header("Location: login.php");
	exit();
}

// conectar-se ao banco de dados
include("config.php");

// verificar se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	// atualizar os dados do usuário no banco de dados
	$id = $_SESSION["id"];
	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$senha = $_POST['senha'];

	$sql = "UPDATE tbusuarios SET nome='$nome', email='$email', senha='$senha' WHERE id=$id";
//var_dump($sql);
//exit();
	if (mysqli_query($conn, $sql)) {
		echo "Usuário atualizado com sucesso.";
	} else {
		echo "Erro ao atualizar usuário: " . mysqli_error($conn);
	}

	// atualizar as informações na sessão
	$_SESSION["nome"] = $nome;
	$_SESSION["email"] = $email;
	$_SESSION["senha"] = $senha;

	// redirecionar de volta para o perfil do usuário
	header("Location: paginaPerfil.php");
	exit();
} else {
	// exibir o formulário preenchido com os dados do usuário
	$id = $_SESSION["id"];
	$sql = "SELECT * FROM tbusuarios WHERE id=$id";
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_assoc($result);
	$nome = $row['nome'];
	$email = $row['email'];
	$senha = $row['senha'];
}
?>

<!DOCTYPE html>
<html>

<head>
	<link rel="stylesheet" href="css/editarUsuario.css">
	<title>Editar cadastro</title>
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
			<h1 id="titulo-formulario">Editar cadastro</h1>
			<label class="label" for="">Nome:</label>
			<input class="inputs" type="text" name="nome" value="<?php echo $nome; ?>">
			<label class="label" for="">Email:</label>
			<input class="inputs" type="email" name="email" value="<?php echo $email; ?>">
			<label class="label" for="">Senha:</label>
			<input class="inputs" type="password" name="senha" value="<?php echo $senha; ?>">
			<div id="container-btn-salvar">
				<input id="btn-salvar" type="submit" name="submit" value="Salvar">
			</div>
		</form>
	</main>
	<footer id="rodape">
		&copy;Todos os direitos reservados ao Colégio ULBRA São Lucas.
	</footer>
</body>

</html>