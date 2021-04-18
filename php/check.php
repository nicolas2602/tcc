<?php

if($_SESSION['profile']!='Admin'){
    header ('location:Principal.php');
}

?>