<?php
    header("Content-Type: text/html; charset=ISO-8859-1",true);
    require_once("functions.php");
    seguranca();
    $username = $_SESSION['user']['username'];
    $nome = $_SESSION['user']['nome'];
    $email = $_SESSION['user']['email'];
    $cpf = $_SESSION['user']['cpf'];

 ?>






<!DOCTYPE html>
<html>
    <head>
        <title> PHP UPDATE DATA </title>

        <meta charset="utf-8">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" type="text/css" href="css/estilinho.css">

    </head>

    <body>

        <form action="EDITSERV.php" method="post">

            Nome:<input type="text" name="nome" ><br><br>

            Cpf:<input type="text" name="cpf" ><br><br>

            Email:<input type="text" name="email" ><br><br>

            Sexo:<input type="text" name="sexo" ><br><br>

            RG:<input type="text" name="rg" ><br><br>

            Rua:<input type="text" name="rua" ><br><br>

            Casa:<input type="text" name="casa" ><br><br>

            Cep:<input type="text" name="cep" ><br><br>

            Bairro:<input type="text" name="bairro" ><br><br>

            Cidade:<input type="text" name="cidade" ><br><br>

            <input type="submit" name="update" value="Update Data">

 <td align="left">
    <select name="username"> 
    <option><?php echo $username?></option> 

    </select>
   </td>

        </form>

    </body>


</html>