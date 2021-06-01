<?php

include 'php/conexao.php';

$del="DELETE FROM `compra_produto` WHERE `compra_produto`.`ID` = '".$_GET['del']."'";

mysqli_query($con,$del);
header('location:carrinho.php');

?>