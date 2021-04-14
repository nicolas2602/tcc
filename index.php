
<?php include 'php/conexao.php';?>
<?php include 'php/insert2.php';?>


<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/Tcc.css">
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>www.x-max.com.br</title>
</head>
<body>

<br/>


 <div class="jumbotron container bg-light col-sm-4 rounded border border-dark " >

            <form class="form-signin" method="post" enctype="multipart/form-data">

            <center>
              <img alt="logomarca" src="imagens/logo1.png" width="300px">
            </center>

                <h1 style="color:rgb(56, 52, 52)"><b><center>Cadastro</center></b></h1>
                 

            <label for="inputEmail" class="sr-only">E-mail</label>
                <input type="email" id="inputEmail" class="form-control" name="email" placeholder="Endereço de e-mail" required autofocus><br/>
                  
             <label for="inputEmail" class="sr-only">Usuario</label>
                <input type="text" id="inputUser" class="form-control" name="user" placeholder="Usuário" required autofocus><br/>
                   
            <label for="inputPassword" class="sr-only">Senha</label>
                <input type="password" id="inputPassword" class="form-control" name="senha" placeholder="Senha" required><br/>
                   
            <label for="inputPassword" class="sr-only">Repetir Senha</label>
                <input type="password" class="form-control" placeholder="Repetir Senha" name="csenha" id="rsenha" required>
                
                <br>
                <input type="file" name="f1">
               

                <div class="checkbox mb-3"><br>
                    <center>
                        <label>
                            <input type="checkbox" value="lembre-me" required> Lembre-me
                        </label>
                    </center>
                </div>

                <hr>

                <button class="btn btn-lg btn-success btn-block" type="submit" value="submit" name="reg">Cadastrar</button>


            </form>
            <a href="login.php"><button style="margin-top: 5px;" class="btn btn-lg btn-primary btn-block" type="submit">Se já é cadastrado faça Login</button></a>
    </div>

</form>


</body>
</html>