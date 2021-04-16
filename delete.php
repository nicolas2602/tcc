<?php
include 'php/conexao.php';
include 'php/check2.php';

$sq="delete from registro where IdRegistro='$_SESSION[IdRegistro]'";
mysqli_query($con,$sq);
header('location:index.php');
?>