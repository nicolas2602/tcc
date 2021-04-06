<?php
include 'conexao.php';

if(isset($_POST['log'])){
    $email=$_POST['email'];
    $senha=$_POST['senha'];
    $select= "select * from registro where emailCadastro='$email' and senhaCadastro= '$senha'";   
   $qu= mysqli_query($con, $select);
   
   if(mysqli_num_rows($qu)>0){
      $f= mysqli_fetch_assoc($qu);
      $_SESSION['id']=$f['id'];
      header ('location:Principal.php');
   }
   else{
       echo 'username or password does not exist';
   }
  
}
?>