<?php
include 'conexao.php';
if(isset($_POST['cad'])){
    $t=$_POST['nome'];
    $u=$_POST['email'];
    $p=$_POST['cep'];
    $c=$_POST['senha'];
    $g=$_POST['csenha'];

       $i="insert into cadastro(nomeCadastro,emailCadastro,cepCadastro,senhaCadastro,csenhaCadastro) value ('$t','$u','$p','$c','$g')";
       mysqli_query($con, $i);

       if($i){
        echo "Cadastro com sucesso";
        header('location: teste.php');
}
}
?>