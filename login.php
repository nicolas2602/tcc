<?php
include'connect.php';

if(isset($_POST['sub'])){
    $email=$_POST['email'];
    $senha=$_POST['senha'];

    $selec= "select * from cadastro where username='$email' and password= '$senha'";   

   $querySelect= mysqli_query($con, $select);
   
   if(mysqli_num_rows($qu)>0){
      $f= mysqli_fetch_assoc($qu);
      $_SESSION['id']=$f['id'];
      header ('location:home.php');
   }
   else{
       echo 'E-mail e senha não existem';
   }
  
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="template.css">
    <title>Document</title>
</head>
<body>

<div class="login-box">
  <h2>Login</h2>
  <form>
    <div class="user-box">
      <input type="email" name="email" required="">
      <label>E-mail</label>
    </div>
    <div class="user-box">
      <input type="password" name="senha" required="">
      <label>Senha</label>
    </div>
    <a href="#">
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      Submit
    </a>
  </form>
</div>

</body>
</html>