<?php 
   
    include 'conexao.php';

    $s="select * from registro 
    as r inner join profile_reg as p on P.idProfile = r.fk_idProfile
    where IdRegistro='$_SESSION[IdRegistro]'";
    $qu= mysqli_query($con, $s);
    $f= mysqli_fetch_assoc($qu);
    
?>