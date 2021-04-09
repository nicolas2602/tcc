<?php include 'php/conexao.php';?>
<?php include 'php/selecionar.php';?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="Tcc.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>XMAX Login</title>
</head>
<body>
<br>
    <div class="jumbotron container bg-light col-sm-4 rounded border border-primary " >

            <form  method="post">
                <h1 class="h3 mb-3 font-weight-normal"><center><img id="Pizzagame"src="imagens/logo1.png" width="300px" /></center></h1>
                <h1 style="color:rgb(56, 52, 52)"><b><center>Login</center></b></h1>

                
                <input type="email" name='email' id="inputUser" class="form-control" placeholder="E-mail" required autofocus><br>
				
                
                <input type="password" name='senha' id="inputPassword" class="form-control" placeholder="Senha" required>
                
                <button style="margin-top: 10px;" class="btn btn-lg btn-primary btn-block" type="submit" name="log">Entrar</button>

            </form>

            <a href="index.php"><button style="margin-top: 3px;" class="btn btn-lg btn-success btn-block" type="submit">Criar nova conta</button></a>


	</div>
		
</form>
</body>
</html>