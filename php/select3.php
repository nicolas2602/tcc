<?php
   include 'conexao.php';

      $selectPacote="Select * FROM pacote where donoPacote='$nome' and nomePacote='$pac'";   
      $qu= mysqli_query($con, $selectPacote);
      
      if(mysqli_num_rows($qu)>0){
         $f= mysqli_fetch_assoc($qu);
         $_SESSION['IdPacote']=$f['IdPacote'];
      }

   $s="select * from pacote where IdPacote='$_SESSION[IdPacote]'";
   $qu= mysqli_query($con, $s);
   $f= mysqli_fetch_assoc($qu);
  
?>