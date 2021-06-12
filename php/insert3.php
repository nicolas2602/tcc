<?php
include 'conexao.php';
include 'select2.php';

if(isset($_POST['pag'])){  
    $end=$_POST['endereCo'];
    $cep=$_POST['CEP'];
    $pag=$_POST['pagamento'];
    $pac=$_POST['pacote'];
    $cliente=$_SESSION['IdRegistro'];

       $insert="insert into paga_pacote(enderecoPag,cepPag,formaPag,fk_IdPacote,fk_IdRegistro) 
                               value ('$end','$cep','$pag','$pac','$cliente')";
       mysqli_query($con, $insert);

       if($insert){
        header('location: Principal.php');
}
}
?>