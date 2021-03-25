<?php include 'conexao.php' ?>
<?php include 'php/insert.php' ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="template.css">
    <title>Document</title>
</head>
<body>

<div class="login-box">
  <h2>Cadastro</h2>
  <form enctype="multipart/form-data" method="POST">
  
  <div class="user-box">
      <input type="text" name="nome" required="">
      <label>Nome</label>
    </div>

    <div class="user-box">
      <input type="email" name="email" required="">
      <label>E-mail</label>
    </div>

    
    <div class="user-box">
      <input type="text" name="cep" required="">
      <label>CEP</label>
    </div>

    <div class="user-box">
      <input type="password" name="senha" required="">
      <label>Senha</label>
    </div>

    <div class="user-box">
      <input type="password" name="csenha" required="">
      <label>Confirmar senha</label>
    </div>

    <input type="submit" name="cad">
      <span></span>
      <span></span>
      <span></span>
      <span></span>
    </input>

  </form>
</div>

</body>
</html>