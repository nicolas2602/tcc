<?php 
   
    include 'conexao.php';

    $s="select * from registro where IdRegistro='$_SESSION[IdRegistro]'";
    $qu= mysqli_query($con, $s);
    $f= mysqli_fetch_assoc($qu);
    
?>