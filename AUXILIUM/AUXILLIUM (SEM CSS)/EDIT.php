<?php
   header("Content-Type: text/html; charset=ISO-8859-1",true);
   require_once("functions.php");
   seguranca();
   $username = $_SESSION['user']['username'];
   $nome = $_SESSION['user']['nome'];
   $email = $_SESSION['user']['email'];
   $cpf = $_SESSION['user']['cpf'];

   //ISSO DEVE ESTAR NO INICIO DE CADA PÁGINA QUE O USUÁRIO USAR APÓS O LOGIN
?>



<!DOCTYPE html>

<html>

    <head>

        <title> PHP UPDATE DATA </title>

        <meta charset="UTF-8">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">

    </head>

    <body>

        <form action="EDITSERV.php" method="post">

            ID To Update: <input type="text" name="username" required><br><br>

            Nome:<input type="text" name="nome" required><br><br>

            Cpf:<input type="text" name="cpf" required><br><br>

            Email:<input type="text" name="email" required><br><br>

            <input type="submit" name="update" value="Update Data">

        </form>

    </body>


</html>