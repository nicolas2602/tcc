<?php
   include 'conexao.php';
   include 'select2.php';

   if(isset($_POST['final'])){   

    $total=$_POST['totalProd'];
    $cliente=$_SESSION['IdRegistro'];

    $regCompra="insert into compra(TOTAL_PRECO, fk_IdRegistro) values('$total', '$cliente')";
    mysqli_query($con, $regCompra);
   }


?>