<?php
include 'conexao.php';

if(isset($_POST['log'])){
    $email=$_POST['email'];
    $senha=md5($_POST['senha']);
    $s= 
    "
    select * from registro
    as r inner join profile_reg as p on P.idProfile = r.fk_idProfile
    where emailCadastro='$email' and senhaCadastro= '$senha'
    ";   
    $qu= mysqli_query($con, $s);
   
   if(mysqli_num_rows($qu)>0){
      $f= mysqli_fetch_assoc($qu);
      $_SESSION['IdRegistro']=$f['IdRegistro'];
      $_SESSION['profile']=$f['nameProfile'];
      header ('location:Principal.php');
   }
   else{
       echo 
       "<script>alert('Email e Senha Incorretos')</script>";
   }
  
}
?>