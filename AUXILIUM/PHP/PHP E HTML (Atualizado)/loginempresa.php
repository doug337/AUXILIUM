
<?php
$error=''; 
if(isset($_POST['submit'])){
 if(empty($_POST['email']) || empty($_POST['senha'])){
 $error = "Usuário ou senha errado";
 }
 else
 {
 
 $user=$_POST['email'];
 $pass=$_POST['senha'];
 
 $conn = mysqli_connect("localhost", "root", "");
 
 $db = mysqli_select_db($conn, "axe");

 $query = mysqli_query($conn, "SELECT * FROM empresa WHERE senha='$pass' AND email='$user'");
 
 $rows = mysqli_num_rows($query);
 if($rows == 1){
 header("Location: funciona.php"); 
 }
 else
 {
 $error = "Usuario ou senha errado";
 }
 mysqli_close($conn);
 }
}
 
?>