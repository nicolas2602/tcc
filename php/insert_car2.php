<?php

include 'conexao.php';
if(isset($_POST['add'])){
        
    $produto=$_POST['prod'];
    $preco=$POST['price'];

    $insertProd="insert into produto(NOME_PRODUTO,preco) values ('$produto','$preco')";

    mysqli_query($con, $insertProd);

    if($insertProd){
        header('location: carrinho.php');
}
}

?>