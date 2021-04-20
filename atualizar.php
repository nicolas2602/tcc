<?php 
     include 'php/conexao.php';
     include 'php/edit.php';
?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/Tcc.css">
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>X-MAX</title>
</head>
<body>

<br/>


 <div class="jumbotron container bg-light col-sm-4 rounded border border-dark " >

            <form class="form-signin" method="post" enctype="multipart/form-data">

            <center>
              <img alt="logomarca" src="imagens/logo1.png" width="300px">
            </center>

                <h2 style="color:rgb(56, 52, 52)"><b><center>Atualizar Perfil</center></b></h2>
                 

            <label for="email">E-mail</label>
                <div class="input-group mb-3">
                   <input type="email" id="email" class="form-control" name="email" value="<?php echo $f['emailCadastro']?>" required autofocus><br/>
                    <div class="input-group-append">
                        <span class="input-group-text" id="email">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
                                <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2zm13 2.383-4.758 2.855L15 11.114v-5.73zm-.034 6.878L9.271 8.82 8 9.583 6.728 8.82l-5.694 3.44A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.739zM1 11.114l4.758-2.876L1 5.383v5.73z"/>
                            </svg>
                        </span>
                    </div>  
                </div>  

             <label for="usuario">Usuario</label>
             <div class="input-group mb-3"> 
                 <input type="text" id="user" class="form-control" name="user" value="<?php echo $f['nomeCadastro']?>" required autofocus><br/>
                    <div class="input-group-append">
                        <span class="input-group-text" id="user">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                                <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
                            </svg>
                        </span>
                    </div>    
            </div>
        
     
            <label for="inputPassword">Senha</label>
               <div class="input-group mb-3">
                   <input type="password" id="senha" class="form-control" name="senha" value="<?php echo $f['senhaCadastro']?>" required><br/>
                        <div class="input-group-append">
                            <button id="botao" type="button" class="input-group-text btn" onclick="mostrarSenha()" type="button">
                                <svg id="mostrar" display="none" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                                    <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"/>
                                    <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/>
                                </svg>

                                <svg id="ocultar"xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye-slash" viewBox="0 0 16 16">
                                    <path d="M13.359 11.238C15.06 9.72 16 8 16 8s-3-5.5-8-5.5a7.028 7.028 0 0 0-2.79.588l.77.771A5.944 5.944 0 0 1 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.134 13.134 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755-.165.165-.337.328-.517.486l.708.709z"/>
                                    <path d="M11.297 9.176a3.5 3.5 0 0 0-4.474-4.474l.823.823a2.5 2.5 0 0 1 2.829 2.829l.822.822zm-2.943 1.299.822.822a3.5 3.5 0 0 1-4.474-4.474l.823.823a2.5 2.5 0 0 0 2.829 2.829z"/>
                                    <path d="M3.35 5.47c-.18.16-.353.322-.518.487A13.134 13.134 0 0 0 1.172 8l.195.288c.335.48.83 1.12 1.465 1.755C4.121 11.332 5.881 12.5 8 12.5c.716 0 1.39-.133 2.02-.36l.77.772A7.029 7.029 0 0 1 8 13.5C3 13.5 0 8 0 8s.939-1.721 2.641-3.238l.708.709zm10.296 8.884-12-12 .708-.708 12 12-.708.708z"/>
                                </svg>
                            </button>
                        </div>  
                </div>

                <script>
                   function mostrarSenha(){
                       var tipo = document.getElementById("senha"); // <input id="senha">
                       if(tipo.type == "password"){ // conectado a <input type="password">
                           tipo.type = "text";
                           document.getElementById('mostrar').style.display = "inline-block";
                           document.getElementById('ocultar').style.display = "none";
                       }else{
                        tipo.type = "password"; // conectado a <input type="password"> e <button type="button" onclick="mostrarSenha()"></button>
                           document.getElementById('mostrar').style.display = "none";
                           document.getElementById('ocultar').style.display = "inline-block";
                       }
                   }
                </script>
                   
            <label for="inputPassword">Repetir Senha</label>
                <div class="input-group mb-3">
                  <input type="password" class="form-control" name="csenha" id="rsenha" value="<?php echo $f['csenhaCadastro']?>" required>
                    <div class="input-group-append">                  
                        <button type="button" class="input-group-text btn" onclick="mostrarRSenha()">
                            
                            <svg id="mostrar2" display="none" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                                <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"/>
                                <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/>
                            </svg>

                            <svg id="ocultar2" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye-slash" viewBox="0 0 16 16">
                                <path d="M13.359 11.238C15.06 9.72 16 8 16 8s-3-5.5-8-5.5a7.028 7.028 0 0 0-2.79.588l.77.771A5.944 5.944 0 0 1 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.134 13.134 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755-.165.165-.337.328-.517.486l.708.709z"/>
                                <path d="M11.297 9.176a3.5 3.5 0 0 0-4.474-4.474l.823.823a2.5 2.5 0 0 1 2.829 2.829l.822.822zm-2.943 1.299.822.822a3.5 3.5 0 0 1-4.474-4.474l.823.823a2.5 2.5 0 0 0 2.829 2.829z"/>
                                <path d="M3.35 5.47c-.18.16-.353.322-.518.487A13.134 13.134 0 0 0 1.172 8l.195.288c.335.48.83 1.12 1.465 1.755C4.121 11.332 5.881 12.5 8 12.5c.716 0 1.39-.133 2.02-.36l.77.772A7.029 7.029 0 0 1 8 13.5C3 13.5 0 8 0 8s.939-1.721 2.641-3.238l.708.709zm10.296 8.884-12-12 .708-.708 12 12-.708.708z"/>
                            </svg>
                            
                        </button>
                    </div>
                    
                </div> 

                <script>
                   function mostrarRSenha(){
                       var tipo = document.getElementById("rsenha");
                       if(tipo.type == "password"){
                           tipo.type = "text";
                           document.getElementById('mostrar2').style.display = "inline-block";
                           document.getElementById('ocultar2').style.display = "none";
                       }else{
                           tipo.type = "password";
                           document.getElementById('mostrar2').style.display = "none";
                           document.getElementById('ocultar2').style.display = "inline-block";
                       }
                   }
                </script>
         

                <img class="img-thumbnail mx-auto d-block" src="<?php echo $f['imagem']?>" width="100px" height="100px">
                <input type="file" name="f1">
                <input type="hidden" name="img1" value="<?php echo $f['imagem']?>">
               

                <div class="checkbox mb-3"><br>
                    <center>
                        <label>
                            <input type="checkbox" value="lembre-me"> Lembre-me
                        </label>
                    </center>
                </div>

                <hr>

                <button class="btn btn-lg btn-primary btn-block" type="submit" value="submit" name="reg">Atualizar</button>


            </form>
    
    </div>

</form>


</body>
</html>
