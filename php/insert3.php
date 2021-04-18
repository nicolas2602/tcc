<?php
include 'conexao.php';
if(isset($_POST['pag'])){
    $name=$_POST['nome'];
    $pac=$_POST['pacote'];
    

       $insert="insert into pacote(donoPacote,nomePacote) value ('$name','$pac')";
       mysqli_query($con, $insert);

       if($insert){
        echo "Cadastro com sucesso";
        header('location: Pagamento.php');
}
}
?>