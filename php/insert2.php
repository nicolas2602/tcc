<?php 
include 'conexao.php';
if(isset($_POST['reg'])){
   $empresa=$_POST['emp'];
   $cnpj=$_POST['cnpj'];
   $nempresa=$_POST['nempresa'];
   $tserviço=$_POST['tserviço'];
   $endem=$_POST['endem'];
   $parceria=$_POST['parceria'];


   $i="insert into empresa(empresa,cnpj,nomeEmpresa,tservico,endEmpresa,parceria) 
       values ('$empresa','$cnpj','$nempresa','$tserviço','$endem','$parceria')";

        mysqli_query($con, $i);
        header ('location:login.php');

    }

?>