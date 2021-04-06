<?php
include 'conexao.php';
if(isset($_POST['pag'])){
    $end=$_POST['endereco'];
    $pac=$_POST['pacote'];
    $pag=$_POST['pagamento'];
    

       $insert="insert into info(enderecoInfo,pacoteInfo,fpagoInfo) value ('$end','$pac','$pag')";
       mysqli_query($con, $insert);

       if($insert){
        echo "Cadastro com sucesso";
        header('location: Pagamento.php');
}
}
?>