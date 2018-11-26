<?php
	header("Content-Type: text/html; charset=ISO-8859-1",true);
	require_once("functions.php");
	seguranca();
	$username = $_SESSION['user']['username'];
	$nome = $_SESSION['user']['nome'];
	$email = $_SESSION['user']['email'];
	$cpf = $_SESSION['user']['cpf'];
?>

<!DOCTYPE HTML>

<html lang="pt-BR">
	<head>
		<title>Yoread</title>
		<link rel="stylesheet" href="../css/styleinicial.css" />
		<link href="https://fonts.googleapis.com/css?family=Cedarville+Cursive" rel="stylesheet">
		<meta http-equiv="Content-Type" content="text/html;charset=iso-8859-1" />
	</head>

	<body>

		

		<!-- meio -->
		<?php
		require_once("config.php");
		$config = new Config();
		$conexao = $config->conectaBanco();

		$query = "select email, cidade, cpf from usuario";

		$result = mysqli_query($conexao, $query) or die('Invalid query: ' . $conexao->error);

		$num = 0;
		if ($result->num_rows > 0) {
 
	    while($row = $result->fetch_assoc()) {
				$num = $num + 1;
				echo "		<div class = \"textoconf\">";
				echo "			<h1 class = \"Entidades declaradas\">".$email."</h1>";
				echo "			<p class = \"sinopse\">".$nome."";
				echo "			<a class = \"autor\" href=\"#\">".$cpf."</a>";
				echo "		</div>";
				echo "</div>";
				break;
	    }
		} else {
			echo "fUNCIONANDO";

		}
		$conexao->close();
		?>

	</body>
</html>
