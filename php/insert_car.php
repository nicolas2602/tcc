<?php         
    
    include 'conexao.php';

    // $sq=
    // "
    // select * from produto as p
    // left join compra_produto as cp on cp.FK_PRODUTO = P.ID_PRODUTO
    // ";

    // $qu=mysqli_query($con,$sq);
    // $produto=mysqli_fetch_assoc($qu);

    // $sq=
    // "
    // SELECT * FROM compra_produto as cp
    // inner join compra as c on c.ID_COMPRA = cp.FK_COMPRA
    // inner join produto as p on p.ID_PRODUTO = cp.FK_PRODUTO
    // ";
    // $qu=mysqli_query($con,$sq);
    // $compra_produto=mysqli_fetch_assoc($qu);

    if(isset($_POST['add'])){
        
        $produto=$_POST['prod'];
        $preco=$_POST['price'];

        if($_FILES['f1']['name']){
            move_uploaded_file($_FILES['f1']['tmp_name'], "produto/".$_FILES['f1']['name']);
            $img="produto/".$_FILES['f1']['name'];
        }
    
    
        $insertProd="insert into produto(NOME_PRODUTO,preco,foto_produto) values ('$produto','$preco','$img')";
    
        mysqli_query($con, $insertProd);
        header('location:carrinho.php');
    }
    
    
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

}

?>