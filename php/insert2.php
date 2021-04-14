<?php
include 'conexao.php';
if(isset($_POST['reg'])){
    $u=$_POST['email'];
    $t=$_POST['user'];
    $c=$_POST['senha'];
    $g=$_POST['csenha'];

    if($_FILES['f1']['name']){
        move_uploaded_file($_FILES['f1']['tmp_name'], "perfil/".$_FILES['f1']['name']);
        $img="perfil/".$_FILES['f1']['name'];
    }

    $i="insert into registro(emailCadastro,nomeCadastro,senhaCadastro,csenhaCadastro,imagem) values ('$u','$t','$c','$g','$img')";
    mysqli_query($con, $i);
    header ('location:login.php');
}
?>