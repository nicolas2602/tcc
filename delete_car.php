<?php

include 'php/conexao.php';

if(isset($_POST['del'])){
    $id=$_POST['id'];
    $produto=$_POST['prod'];
    $preco=$_POST['price'];
        
    if($_FILES['f1']['name']){
        move_uploaded_file($_FILES['f1']['tmp_name'], "perfil/".$_FILES['f1']['name']);
        $img="perfil/".$_FILES['f1']['name'];
    }
    else{
        $img=$_POST['img1'];
    }

        $up="delete from produto where ID_PRODUTO={$id}";
        mysqli_query($con, $up);
        header('location:carrinho.php');
    
    }

    $id = $_GET['ID_PRODUTO'];
    $name = $_GET['NOME_PRODUTO'];
    $preco = $_GET['preco'];
    $foto = $_GET['foto_produto'];
    $sqlGetProd="select * from produto where ID_PRODUTO=($id)";
    $queryGetProd= mysqli_query($con, $sqlGetProd);
    $resultProd=mysqli_fetch_assoc($queryGetProd);

?>