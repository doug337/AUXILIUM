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
	$rg = $_POST['rg'];
	$cpf = $_POST['cpf'];
	$rua = $_POST['rua'];
	$casa = $_POST['casa'];
	$bairro = $_POST['bairro'];
	$cidade = $_POST['cidade'];
	$cep = $_POST['cep'];
	
	$sql = "INSERT INTO usuario (nome, email, senha, rg, cpf, rua, casa, bairro, cidade, cep) VALUES ('$nome', '$email', '$senha', '$rg', '$cpf', '$rua', '$casa', '$bairro', '$cidade', '$cep')";
	
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
