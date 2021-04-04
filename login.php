<?php include 'conexao.php' ?>
<?php include 'php/select.php' ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="template.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
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

    
    <button type="button" class="btn btn-outline-info" name="sub">
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      Entrar
    </button>

   
  </form>
<br>
   <a type="submit" href="cadastro.php" class="btn btn-outline-success">Cadastrar</a>

</div>

</body>
</html>