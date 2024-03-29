<?php 
    include 'php/conexao.php';
    include 'php/select.php';
    include 'php/select2.php';
    include 'php/insert_car.php';
    include 'php/finale_car.php';
    
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="css/Tcc.css">
        <title>X-MAX</title>
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script>
            function previewFile(input){
                var file = $("input[type=file]").get(0).files[0];
        
                if(file){
                    var reader = new FileReader();
        
                    reader.onload = function(){
                        $("#previewImg").attr("src", reader.result);
                    }
        
                    reader.readAsDataURL(file);
                }
            }
        </script>
    </head>
    <body>
           <?php include 'include/nav.php'; ?>


            <form method='post' enctype='multipart/form-data'>
                <?php include 'include/add_car.php'; ?>
            </form>
 

            
                <table class="table table-borderless text-center">
                 <thead class="thead-dark">
                <tr>
                    <th scope="col">
                        Foto
                    </th>
                    <th scope="col">
                        Código
                    </th>
                    <th scope="col">
                        Nome
                    </th>
                    <th scope="col">
                        Preço
                    </th>
                    <th scope="col">
                        Quantidade
                    </th>
                    <?php
                    if($_SESSION['profile']=='Admin'){
                    echo"
                    <th scope='col'></th>";
                    }
                    ?>

                </tr>
                </thead>

                <?php
                $sq=
                "
                select * from produto as p
                left join compra_produto as cp on cp.FK_PRODUTO = P.ID_PRODUTO
                ";

                $qu=mysqli_query($con,$sq);
                while($produto=  mysqli_fetch_assoc($qu)){
                ?>
                <tr>
                    <td>
                       <img src="<?php echo $produto['foto_produto']?>" width="80px" height="80px">
                    </td>
                    <td>
                        <?php echo $produto['ID_PRODUTO']?>
                    </td>
                    <td>
                        <?php echo $produto['NOME_PRODUTO']?>
                    </td>
                    <td>
                        R$ <?php echo $produto['preco']?>
                    </td>
                   <td>
                   <form method="POST" enctype="multipart/form-data">
                        <div class="input-group mb-3">                  
                                <input type="number" class="form-control col-10"  name="quantity" value="<?=$produto['QTD_PRODUTO']?>" min="1" placeholder="Quantidade" required>
                                <input type="hidden" name="idProduto" value="<?=$produto['ID_PRODUTO']?>">
                                <input type="hidden" name="nomeProduto" value="<?=$produto['NOME_PRODUTO']?>">
                                <div class="input-group-append">
                                <input type="submit" class="btn btn-warning col-md-12" name="addShoppingCart" value="Adicionar">
                                </div>
                        </div>         
                    </form>             
                    </td>
                    <?php
                    if($_SESSION['profile']=='Admin'){
                    echo("
                    <td>
                         <a href='up_car.php?ID_PRODUTO=$produto[ID_PRODUTO]&NOME_PRODUTO=$produto[NOME_PRODUTO]
                                &preco=$produto[preco]&foto_produto=$produto[foto_produto]'
                                class='btn btn-primary'>
                                Atualizar
                        </a> 

                        <a href='excluir_car.php?ID_PRODUTO=$produto[ID_PRODUTO]&NOME_PRODUTO=$produto[NOME_PRODUTO]
                                &preco=$produto[preco]&foto_produto=$produto[foto_produto]' 
                                class='btn btn-danger'>
                                Excluir
                        </a> 

                    </td>
                    ");
                    }
                    ?>
                    
                </tr>
                <?php
                }
                ?>

                </table>
            

                <br>
                <br>
                <br>
            



                <table class="table table-borderless text-center">
                 <thead class="thead-dark">
                    <tr>
                        <th>
                            Produto
                        </th>
                        <th>
                            Preço
                        </th>
                        <th>
                            Quantidade
                        </th>
                        <th>
                            Total Preço
                        </th>
                        <th>
                            
                        </th>
                    </tr>
                </thead>
            
                <?php
                $total = 0;

                $sq="
                SELECT * FROM compra_produto as cp
                inner join compra as c on c.ID_COMPRA = cp.FK_COMPRA
                inner join produto as p on p.ID_PRODUTO = cp.FK_PRODUTO
                ";
                $qu=mysqli_query($con,$sq);
                while($compra_produto=  mysqli_fetch_assoc($qu)){
                ?>
                <tr>
                    <td>
                        <?php echo $compra_produto['NOME_PRODUTO']?>
                    </td>
                    <td>
                        R$ <?php echo $compra_produto['preco']?>
                    </td>
                    <td>
                        <?php echo $compra_produto['QTD_PRODUTO']?>
                    </td>
                    <td>
                        R$ <?php echo $compra_produto['QTD_PRODUTO']*$compra_produto['preco']?>.00
                    </td>
                    <td>
                       <a href="delete_car2.php?del=<?php echo $compra_produto['ID']?>&<?php echo $compra_produto['FK_PRODUTO']?>&
                         <?php echo $compra_produto['FK_COMPRA']?>&<?php echo $compra_produto['QTD_PRODUTO']?>"class="btn btn-danger">
                         <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
                            <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
                        </svg>
                        </a> 
                    </td>
                    
                </tr>
                <?php
                    if($compra_produto['QTD_PRODUTO']*$compra_produto['preco']){
                    $total = $total + ($compra_produto['QTD_PRODUTO']*$compra_produto['preco']);
                    }          
                }
                ?>
            <form method="POST" enctype="multipart/form-data">
                 <tr>
                    <th scope="row" class="table-secondary"></th>
                    <td colspan="2" align="right" class="table-secondary"><strong>TOTAL:</strong></td>
                    <td><strong>R$ <?php echo number_format($total, 2); ?></strong></td>
                    <input type="hidden" name="idcompra" value="<?=$compra_produto['ID_COMPRA']?> ">  
                   <input type="hidden" name="totalProd" value="<?=$total;?> ">            
                </tr>
            
                </table>
                 <center>
                    <button name="final" type="submit" class="btn btn-success col-md-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-currency-dollar" viewBox="0 0 16 16">
                            <path d="M4 10.781c.148 1.667 1.513 2.85 3.591 3.003V15h1.043v-1.216c2.27-.179 3.678-1.438 3.678-3.3 0-1.59-.947-2.51-2.956-3.028l-.722-.187V3.467c1.122.11 1.879.714 2.07 1.616h1.47c-.166-1.6-1.54-2.748-3.54-2.875V1H7.591v1.233c-1.939.23-3.27 1.472-3.27 3.156 0 1.454.966 2.483 2.661 2.917l.61.162v4.031c-1.149-.17-1.94-.8-2.131-1.718H4zm3.391-3.836c-1.043-.263-1.6-.825-1.6-1.616 0-.944.704-1.641 1.8-1.828v3.495l-.2-.05zm1.591 1.872c1.287.323 1.852.859 1.852 1.769 0 1.097-.826 1.828-2.2 1.939V8.73l.348.086z"/>
                        </svg>
                    Finalizar compra
                    </button>
                    </center>

            </form>

           <?php include 'include/footer.php'; ?>
      
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    </body>
</html>