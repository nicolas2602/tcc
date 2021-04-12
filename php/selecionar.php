<?php
include 'conexao.php';

if(isset($_POST['log'])){
    $email=$_POST['email'];
    $senha=$_POST['senha'];
    $s= "select * from registro where emailCadastro='$email' and senhaCadastro= '$senha'";   
    $qu= mysqli_query($con, $s);
   
   if(mysqli_num_rows($qu)>0){
      $f= mysqli_fetch_assoc($qu);
      $_SESSION['id']=$f['id'];
      header ('location:Principal.php');
   }
   else{
       echo '<font style="color:red;">E-mail e senha incorretos!</font>';
   }
  
}
?>