<?php
include 'conexao.php';
if(isset($_POST['reg'])){
    $end=$_POST['endereco'];
    $cep=$_POST['CEP'];
    $email=$_POST['email'];
    $pag=$_POST['pagamento'];
    

       $insert="insert into pagamento(enderecoPag,cepPag,emailPag,formaPag) value ('$end','$cep','$email','$pag')";
       mysqli_query($con, $insert);

       if($insert){
        header('location: Principal.php');
}
}
?>