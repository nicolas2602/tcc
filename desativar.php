<?php
include 'php/conexao.php';
include 'php/check2.php';

$sq="update registro set status_user=1 where IdRegistro='".$_GET['dct']."'";
mysqli_query($con,$sq);
header('location:users.php');
?>