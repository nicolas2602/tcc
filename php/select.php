<?php
include 'conexao.php';
include 'logger.php';

if(isset($_POST['log'])){
    $email=$_POST['email'];
    $senha=base64_encode($_POST['senha']);
    $s= 
    "
    select * from registro
    as r inner join profile_reg as p on P.idProfile = r.fk_idProfile
    where emailCadastro='$email' and senhaCadastro= '$senha' and status_user=0
    ";   
    $qu= mysqli_query($con, $s);
   
    // 0 = true: Desbloqueia a conta do usuário
    // 1 = false: Bloqueia a conta do usuário


   if(mysqli_num_rows($qu)>0){
      $f= mysqli_fetch_assoc($qu);
      $_SESSION['IdRegistro']=$f['IdRegistro'];
      $_SESSION['profile']=$f['nameProfile'];
      header ('location:Principal.php');

      logMsg( "Entrou em no login" );
   }
   
   else{
       echo 
       "<script>alert('Email e Senha Incorretos')</script>";
   }
  
}
?>