<?php 
    include 'php/conexao.php';
    include 'php/select2.php';
    include 'php/insert_car.php';
    include 'php/insert_car2.php';
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="css/Tcc.css">
        <title>X-MAX</title>
    </head>
    <body>
           <?php include 'include/nav.php'; ?>

           <?php include 'include/add_car.php'; ?>

           <form method="post" enctype="multipart/form-data">
                <table class="table table-borderless text-center">
                 <thead class="thead-dark">
                <tr>
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
                            <input type="number" name="quantity" value="<?=$produto['QTD_PRODUTO']?>" min="1" placeholder="Quantity" required>
                            <input type="hidden" name="idProduto" value="<?=$produto['ID_PRODUTO']?>">
                            <input type="hidden" name="nomeProduto" value="<?=$produto['NOME_PRODUTO']?>">
                            <input type="submit" name="addShoppingCart" value="Adicionar">
                        </form>
                    </td>
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
                    </tr>
                </thead>

                <?php
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
                        <?php echo $compra_produto['preco']?>
                    </td>
                    <td>
                        <?php echo $compra_produto['QTD_PRODUTO']?>
                    </td>
                    <td>
                        <?php echo $compra_produto['QTD_PRODUTO']*$compra_produto['preco']?>
                    </td>

                </tr>
                <?php
                }
                ?>
                </table>



           <?php include 'include/footer.php'; ?>
      
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    </body>
</html>