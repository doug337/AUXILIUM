<?php
	require_once("configs.php");

	if ($_SERVER['REQUEST_METHOD'] == 'POST') {

		if(checkValues($_POST['rua'], $_POST['cnpj'], $_POST['nome']))
		{

			$rua = $_POST['rua'];
			$cnpj = $_POST['cnpj'];
			$nome = $_POST['nome'];
			cadastrar($rua, $cnpj, $nome);
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

	function cadastrar($rua, $cnpj, $nome) {
		$config = new Config();
		$conexao = $config->conectaBanco();

		$query = "INSERT INTO empresa (nome, rua, cnpj) VALUES ('".$nome."', '".$rua."', '".$cnpj."')";

		$result = mysqli_query($conexao, $query) or die('Invalid query: ' . $conexao->error);

		if($result !== null){
			echo "Oi";
			session_start();
			$_SESSION['user']['rua'] = $rua;
			$_SESSION['user']['nome'] = $nome;
			$_SESSION['user']['cnpj'] = $cnpj;
			header("Location: emp.php");
		}	else {
			$message = '<h1>Erro ao cadastrar o usuário.</h1>
						<h3>Por favor, <a href="../index.html">Tente Novamente</a></h3>';
			echo $message;
		}
	}
?>
