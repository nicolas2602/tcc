<?php
include 'conexao.php';
if(isset($_POST['reg'])){
   $nome=$_POST['nome'];
   $dataN=$_POST['data'];
   $gen=$_POST['gen'];
   $end=$_POST['end'];
   $city=$_POST['city'];
   $estado=$_POST['estado'];
   $cep=$_POST['cep'];
   $tel=$_POST['tel'];
   $tel2=$_POST['tel2'];
   $cpf=$_POST['cpf'];
   $email=$_POST['email'];
   $senha=$_POST['senha'];
   $rsenha=$_POST['csenha'];

    if($_FILES['f1']['name']){
        move_uploaded_file($_FILES['f1']['tmp_name'], "perfil/".$_FILES['f1']['name']);
        $img="perfil/".$_FILES['f1']['name'];
    }

    $i="insert into registro(nomeCadastro,dataN,genero,endereco,cidade,estado,cep,tel1,tel2,cpf,emailCadastro,senhaCadastro,csenhaCadastro,imagem) 
                values ('$nome','$dataN','$gen','$end','$city','$estado','$cep','$tel','$tel2','$cpf','$email','$senha','$rsenha','$img')";
    mysqli_query($con, $i);
    header ('location:login.php');
}
?>