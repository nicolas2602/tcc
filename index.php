
<?php include 'php/conexao.php';?>
<?php include 'php/insert2.php';?>


<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="Tcc.css">
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>x-max.com</title>
</head>
<body>

<br/>

 <center><img alt="logomarca" src="imagens/logo1.png" width="300px"><center/>
 <div class="jumbotron container bg-light col-sm-4 rounded border border-dark " >

            <form class="form-signin" method="post" enctype="multipart/form-data">

                <center><img id="imgcadastro"src="data:image/png;base64,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" 
                 width="150px"></center>

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
                <br>

                <div class="checkbox mb-3"><br/>
                    <center><label>
                        <input type="checkbox" value="lembre-me"> Lembre-me
                    </label></center>
                </div>

                <button class="btn btn-lg btn-primary btn-block" type="submit" value="submit" onclick="cadastro()" name="reg">Cadastrar</button>

            </form>
            <a href="login.php"><button style="margin-top: 5px;" class="btn btn-lg btn-dark btn-block" type="submit">Se já é cadastrado faça Login</button></a>
    </div>

</form>

<script>

    function cadastro()
     {
         alert("Cadastro com sucesso!");
     }
    
</script>

</body>
</html>