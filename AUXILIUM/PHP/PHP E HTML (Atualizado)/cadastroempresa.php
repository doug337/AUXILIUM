<?php

	$con = mysqli_connect('127.0.0.1','root', '');
	
	if(!$con)
	{
		echo 'deu ruim';
	}
	
	if(!mysqli_select_db($con, 'axe'))
	{
		echo 'BD não selecionado';
	}
	
	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$senha = $_POST['senha'];
	$cnpj = $_POST['cnpj'];
	$valor = $_POST['valor'];

	
	$sql = "INSERT INTO empresa (nome, email, senha, cnpj, valor) VALUES ('$nome', '$email', '$senha', '$cnpj', '$valor')";
	
	if(!mysqli_query($con,$sql))
	{
		echo 'não cadastrado';
	}
	else 
	{
		echo 'Cadastrado com sucesso'; 
		header("Location: funciona.php");
	}
	
	//header("refresh:;2 url=inicio.html");
	
?>
