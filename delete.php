<?php
include 'php/conexao.php';
include 'check2.php';

$sq="delete from registro where IdRegistro='$_SESSION[IdRegistro]'";
mysqli_query($con,$sq);
header('location:login.php');
?>