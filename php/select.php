<?php
include 'conexao.php';

if(isset($_POST['log'])){
    $email=$_POST['email'];
    $senha=$_POST['senha'];
    $s= 
    "
    select * from registro
    as r inner join profile_reg 
    as p on P.idProfile = r.fk_idProfile
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
       '
        <div class="alert alert-danger alert-dismissible fade show" display="none" role="alert">
            <label>E-mail e senha incorretos!</label>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        ';
   }
  
}
?>