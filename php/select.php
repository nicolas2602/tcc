<?php
include 'conexao.php';

if(isset($_POST['sub'])){
    $u=$_POST['email'];
    $p=$_POST['senha'];
    $s= "select * from cadastro where emailCadastro='$u' and senhaCadastro= '$p'";   
   $qu= mysqli_query($con, $s);
   
   if(mysqli_num_rows($qu)>0){
      $f= mysqli_fetch_assoc($qu);
      $_SESSION['id']=$f['id'];
      header ('location:teste.php');
   }
   else{
       echo 'username or password does not exist';
   }
  
}
?>
