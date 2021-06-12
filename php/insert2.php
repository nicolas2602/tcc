<?php 
include 'conexao.php';
include 'select2.php';

if(isset($_POST['reg'])){
   $empresa=$_POST['emp'];
   $cnpj=$_POST['cnpj'];
   $nempresa=$_POST['nempresa'];
   $tserviço=$_POST['tserviço'];
   $endem=$_POST['endem'];
   $parceria=$_POST['parceria'];
    
   $registro = $_SESSION['IdRegistro'];

   $i="insert into empresa(empresa,cnpj,nomeEmpresa,tservico,endEmpresa,parceria,fk_IdRegistro) 
       values ('$empresa','$cnpj','$nempresa','$tserviço','$endem','$parceria','$registro')";

        mysqli_query($con, $i);
        header ('location:login.php');

    }

?>