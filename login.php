<?php 
include 'php/conexao.php';
include 'php/select.php';
?>


<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/Tcc.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>X-MAX Login</title>
</head>
<body>
<br>
    <div class="jumbotron container bg-light col-sm-4 rounded border border-primary " >

            <form  method="post" enctype="multipart/form-data">
                <h1 class="h3 mb-3 font-weight-normal"><center><img id="Pizzagame"src="imagens/logo1.png" width="260px" /></center></h1>
                <h1 style="color:rgb(56, 52, 52)"><b><center>Login</center></b></h1>
                

                <labe>E-mail:</labe>
                <input type="email" name='email' id="inputUser" class="form-control" placeholder="E-mail" required autofocus><br>
				
                <labe>Senha:</labe>
                <input type="password" name='senha' id="inputPassword" class="form-control" placeholder="Senha" required>
                                
                 <hr>
                
                <button style="margin-top: 10px;" class="btn btn-lg btn-primary btn-block" type="submit" name="log">
                   Entrar
                </button>


            </form>

            <a href="cadastro.php" style="margin-top: 3px;" class="btn btn-lg btn-success btn-block">Criar nova conta</a>


	</div>
		
</form>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>