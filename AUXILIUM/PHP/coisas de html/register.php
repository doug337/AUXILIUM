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
	$snome = $_POST['snome'];
	$email = $_POST['email'];
	$senha = $_POST['senha'];
	$cidade = $_POST['cidade'];
	$telefone = $_POST['telefone'];
	$nasc = $_POST['nasc'];
	$escola = $_POST['escola'];
	
	
	
	$sql = "INSERT INTO usuario (nome, snome, email, senha, cidade, telefone, nasc, escola) VALUES ('$nome', '$snome', '$email', '$senha', '$cidade', '$telefone', '$nasc', '$escola')";
	
	if(!mysqli_query($con,$sql))
	{
		echo 'não cadastrado';
	}
	else 
	{
		echo 'Cadastrado com sucesso'; 
		header("Location: login.php");
	}
	
	//header("refresh:;2 url=inicio.html");
	
?>
