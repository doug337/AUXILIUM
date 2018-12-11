<?php
	require_once("config.php");

	if ($_SERVER['REQUEST_METHOD'] == 'POST') {

		if(checkValues($_POST['username'], $_POST['senha'], $_POST['email'], $_POST['nome'], $_POST['cidade']))
		{
			$username = $_POST['username'];
			$senha = $_POST['senha'];
			$email = $_POST['email'];
			$nome = $_POST['nome'];
			$sobrenome = $_POST['cidade'];
			cadastrar($username, $senha, $email, $nome, $sobrenome);
		}
		else {
			$message = '<h1>Por favor, preencha os campos corretamente.</h1>
						<h3><a href="../index.html">Tentar Novamente</a></h3>';
			echo $message;
		}
	}
	else {
		header("Location: ../index.html");
	}

	function checkValues($username, $senha) {
		return true;
	}

	function cadastrar($username, $senha, $email, $nome, $sobrenome) {
		$config = new Config();
		$conexao = $config->conectaBanco();

		$query = "INSERT INTO usuario (nome, email, senha, cidade, username) VALUES ('".$nome."', '".$email."', '".$senha."', '".$sobrenome."', '".$username."')";

		$result = mysqli_query($conexao, $query) or die('Invalid query: ' . $conexao->error);

		if($result !== null){
			echo "Oi";
			session_start();
			$_SESSION['user']['username'] = $username;
			$_SESSION['user']['nome'] = $nome;
			$_SESSION['user']['email'] = $email;
			header("Location: PERFIL.php");
		}	else {
			$message = '<h1>Erro ao cadastrar o usu�rio.</h1>
						<h3>Por favor, <a href="../index.html">Tente Novamente</a></h3>';
			echo $message;
		}
	}
?>
