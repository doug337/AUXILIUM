<?php

// php code to Update data from mysql database Table

if(isset($_POST['update']))
{
    
   $hostname = "localhost";
   $username = "root";
   $password = "";
   $databaseName = "axillium";
   
   $connect = mysqli_connect($hostname, $username, $password, $databaseName);
   
   // get values form input text and number
   
   $id = $_POST['username'];
   $fname = $_POST['nome'];
   $lname = $_POST['cpf'];
   $age = $_POST['email'];
           
   // mysql query to Update data
   $query = "UPDATE `usuario` SET `nome`='".$fname."',`cpf`='".$lname."',`email`='".$age."' WHERE `username` = '".$id."'";
   
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