<?php

include 'php/conexao.php';

if(isset($_POST['reg'])){
    $u=$_POST['email'];
    $t=$_POST['user'];
    $c=$_POST['senha'];
    $g=$_POST['csenha'];

    if($c == $g){
        
    if($_FILES['f1']['name']){
        move_uploaded_file($_FILES['f1']['tmp_name'], "perfil/".$_FILES['f1']['name']);
        $img="perfil/".$_FILES['f1']['name'];
    }
    else{
        $img=$_POST['img1'];
    }

        $i="update registro set emailCadastro='$u',nomeCadastro='$t',senhaCadastro='$c',csenhaCadastro='$g',imagem='$img' where IdRegistro='$_SESSION[IdRegistro]'";
        mysqli_query($con, $i);
        header('location:Principal.php');
    
    }
    else{
        echo '
            <div class="alert alert-danger alert-dismissible fade show" display="none" role="alert">
                <label>Senhas não são idênticas!</label>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            ';
    }
}

    $s="select * from registro where IdRegistro='$_SESSION[IdRegistro]'";
    $qu= mysqli_query($con, $s);
    $f=mysqli_fetch_assoc($qu);

?> 