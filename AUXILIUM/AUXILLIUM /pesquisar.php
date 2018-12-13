<?php
	$servidor = "localhost";
	$usuario = "root";
	$senha = "root";
	$dbname = "auxilio";
	//Criar a conexao
	$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);
	
	$email= $_POST['email'];
	$result_cursos = "SELECT * FROM usuario WHERE email LIKE '%$email%' LIMIT 5";
	$resultado_cursos = mysqli_query($conn, $result_cursos);
	
	while($rows_cursos = mysqli_fetch_array($resultado_cursos)){
		echo "Nome do curso: ".$rows_cursos['email']."<br>";
	} 
?>