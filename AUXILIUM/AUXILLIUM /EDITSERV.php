<?php

 

 if(isset($_POST['update']))
 {
     
    $hostname = "localhost";
    $username = "root";
    $password = "root";
    $databaseName = "auxilio";
    
    $connect = mysqli_connect($hostname, $username, $password, $databaseName);
    
  
    
    $username = $_POST['username'];
    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];
    $email = $_POST['email'];
    $sexo = $_POST['sexo'];
    $rg = $_POST['rg'];
    $rua = $_POST['rua'];
    $casa = $_POST['casa'];
    $cep = $_POST['cep'];
    $bairro = $_POST['bairro'];
    $cidade = $_POST['cidade'];
            
    
    $query = "UPDATE `usuario` SET `nome`='".$nome."',`cpf`='".$cpf."',`email`='".$email."',`sexo`='".$sexo."', `rg`='".$rg."', `rua`='".$rua."', `casa`='".$casa."', `cep`='".$cep."', `bairro`='".$bairro."', `cidade`='".$cidade."'  WHERE `username` = '".$username."'";
    
    $result = mysqli_query($connect, $query);
    
    if($result)
    {
        echo 'Data Updated';
    }else{
        echo 'Data Not Updated';
    }
    mysqli_close($connect);
 }

 ?> 