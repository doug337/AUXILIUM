<?php

	$con = mysql_connect("localhost", "root", "", "test")
		or die("Falha ao conectar" .mysqli_connect_error());

	$nome = mysql_real_escape_string($con, $_POST['nome']);
	$email = mysql_real_escape_string($con, $_POST['email']);
	$senha = mysql_real_escape_string($con, $_POST['senha']);

	$query = "INSERT INTO usuario(nome, email, senha) VALUES('$nome', '$email', '$senha')";

	if(!mysql_query($con, $query))
	{
		echo "Error" .mysql_error($con)
	}
	else
	{
		header("Location: cadaster.php?msg=1")
	}


?>