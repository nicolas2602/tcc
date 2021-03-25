<?php include 'conexao.php' ?>
<?php include 'php/select.php' ?>

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
  <form method="POST">
    <div class="user-box">
      <input type="email" name="email" required="">
      <label>E-mail</label>
    </div>
    <div class="user-box">
      <input type="password" name="senha" required="">
      <label>Senha</label>
    </div>
    <input type="submit" href="#" name="sub">
      <span></span>
      <span></span>
      <span></span>
      <span></span>
    </input>
  </form>
</div>

</body>
</html>