<?php

	$con = mysqli_connect('127.0.0.1','root', 'root');
	
	if(!$con)
	{
		echo 'deu ruim';
	}
	
	if(!mysqli_select_db($con, 'axes'))
	{
		echo 'BD não selecionado';
	}
	
	$nome = $_POST['nome'];

	
	
	
	$sql = "INSERT INTO usuario (nome) VALUES ('$nome')";
	
	if(!mysqli_query($con,$sql))
	{
		echo 'não cadastrado';
	}
	else 
	{
		echo 'Cadastrado com sucesso'; 
		header("Location: entrar.php");
	}
	
	//header("refresh:;2 url=inicio.html");
	
?>
