<?php
include 'php/conexao.php';
include 'php/check2.php';

$sq="update registro set status_user=0 where IdRegistro='".$_GET['act']."'";
mysqli_query($con,$sq);
header('location:users.php');
?>