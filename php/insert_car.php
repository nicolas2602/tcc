<?php         
    
    include 'conexao.php';
    
    if(isset($_POST['addShoppingCart'])){
    
    $product_id = (int)$_POST['idProduto'];
    $quantity = (int)$_POST['quantity'];
    $nomeProduto = $_POST['nomeProduto'];

    $idCompra = 1;

    $sqlGetCompra="select * from compra_produto where FK_COMPRA={$idCompra} AND FK_PRODUTO ={$product_id}";
    $queryGetCompra= mysqli_query($con, $sqlGetCompra);
    $resultCompra=mysqli_fetch_assoc($queryGetCompra);

    $ExisteCompra = isset($resultCompra);    
    if(isset($resultCompra)){
        
        $sqlAddOrUpdate = "
        UPDATE compra_produto set QTD_PRODUTO={$quantity} 
        WHERE FK_PRODUTO ={$product_id} and FK_COMPRA={$idCompra};
        ";

    }else{
        $sqlAddOrUpdate = "
        INSERT INTO compra_produto (FK_PRODUTO,FK_COMPRA,QTD_PRODUTO) 
        VALUES ({$product_id}, {$idCompra},{$quantity});
        ";

    }

    mysqli_query($con, $sqlAddOrUpdate);




    // header('location:home.php');

}

?>