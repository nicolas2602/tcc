<?php

include 'php/conexao.php';

if(isset($_POST['up'])){
    $produto=$_POST['prod'];
    $preco=$_POST['price'];
        
    if($_FILES['f1']['name']){
        move_uploaded_file($_FILES['f1']['tmp_name'], "perfil/".$_FILES['f1']['name']);
        $img="perfil/".$_FILES['f1']['name'];
    }
    else{
        $img=$_POST['img1'];
    }

        $up="update produto set NOME_PRODUTO='$produto', preco='$preco', foto_produto='$img' where ID_PRODUTO='".$_GET['up']."'";
        mysqli_query($con, $up);
        header('location:Principal.php');
    
    }
    $s="select * from produto where ID_PRODUTO'";
    $qu= mysqli_query($con, $s);

?>