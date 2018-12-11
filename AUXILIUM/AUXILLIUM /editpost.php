<?php
            session_start();
            $titulo = $_POST['titulo'];
            $texto = $_POST['descri'];
            
?>


<!DOCTYPE html>
<html>
    <head>
        <title> PHP UPDATE DATAS </title>

        <meta charset="utf-8">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" type="text/css" href="css/estilinho.css">

    </head>

    <body>

        <form action="EDITSERV.php" method="post">

            Titulo:<input type="text" name="titulo" ><br><br>

            Descri:<input type="text" name="descri" ><br><br>


            <input type="submit" name="update" value="Update Data">

 <td align="left">
    <select name="username"> 
    <option><?php echo $username?></option> 

    </select>
   </td>

        </form>

    </body>


</html>