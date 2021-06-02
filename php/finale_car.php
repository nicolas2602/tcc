<?php
   include 'conexao.php';

   if(isset($_POST['final'])){   

    $total=$_POST['totalProd'];

    $regCompra="insert into compra(TOTAL_PRECO) values('$total')";
    mysqli_query($con, $regCompra);
   }


?>