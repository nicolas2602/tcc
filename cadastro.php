<?php 
      include 'php/conexao.php';
      include 'php/insert.php';
      include 'php/select2.php';
?>



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


 <div class="jumbotron container bg-light col-sm-6 rounded border border-dark " >

            <form class="form-signin" method="post" enctype="multipart/form-data">

            <center>
              <img alt="logomarca" src="imagens/logo1.png" width="300px">
            </center>

                <h1 style="color:rgb(56, 52, 52)"><b><center>Cadastro</center></b></h1>
            <br/>

        <div class="row">
            <div class="col">
                <label for="inputEmail">Nome completo: </label>
                <input type="text" id="nome" class="form-control" name="nome" placeholder="Nome completo" required autofocus><br/>
            </div>
            
            <div class="col">
                <label for="inputEmail">Data de Nascimento:</label>
                <input type="date" id="data" class="form-control" name="data" placeholder="Data de Nascimento" required autofocus><br/>
            </div>
        </div>

        <div class="row">
            <div class="col">      
                <label for="inputEmail">Gênero:</label><br>
                    <input type="radio"name="gen" id="gen" value="Masculino" required>Masculino
                    <input type="radio" name="gen" id="gen" value="Feminino">Feminino
            </div>

            <div class="col"> 
                <label for="inputEmail">Endereço:</label>
                <input type="text" id="end" class="form-control" name="end" placeholder="Endereço" required autofocus>
            </div>
        </div>
         <br/>
        <div class="row">
            <div class="col">
                <label for="inputEmail">Cidade:</label>
                <input type="text" id="city" class="form-control" name="city" placeholder="Cidade" required autofocus>
            </div>

            <div class="col">
                    <label for="inputEmail">Estado:</label>
                    <select class="form-control " id="estado" name="estado" required>
                        <option value="">...</option>
                        <option value="SP">SP</option>
                        <option value="RJ">RJ</option>
                        <option value="MG">MG</option>
                        <option value="ES">ES</option>
                        <option value="PA">PA</option>
                        <option value="SC">SC</option>
                        <option value="RS">RS</option>
                        <option value="MS">MS</option>
                        <option value="MT">MT</option>
                        <option value="GO">GO</option>
                        <option value="DF">DF</option>
                    </select>
            </div>

                <div class="col">
                    <label for="inputEmail">CEP:</label>
                    <input type="text" class="form-control" id="cep" name="cep" placeholder="CEP">
                </div>
        </div>
        <br>
        
        <div class="row">
            <div class="col">
                <label for="inputEmail">Telefone 1:</label>
                <input type="text" id="tel" class="form-control" name="tel" placeholder="Telefone (celular ou fixo)" required autofocus>
            </div>

            <div class="col">
                <label for="inputEmail">Telefone 2:</label>
                <input type="text" id="tel2" class="form-control" name="tel2" placeholder="Telefone 2 (opcional)">
            </div>
        </div>
        <br/>
        
        <div class="row">
            <div class="col">
                <label for="inputEmail">CPF:</label>
                <input type="text" id="cpf" class="form-control" name="cpf" placeholder="CPF" required autofocus><br/>
            </div>

            <div class="col">
                <label for="inputEmail">E-mail:</label>
                <input type="email" id="email" class="form-control" name="email" placeholder="Endereço de e-mail" required autofocus><br/>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <label for="inputPassword">Senha:</label>
                    <div class="input-group mb-3">
                        <input type="password" id="senha" class="form-control" name="senha" placeholder="Senha" required><br/>
                        <div class="input-group-append">
                            <button id="botao" type="button" class="btn btn-dark" onclick="mostrarSenha()" type="button">

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
            <div class="col">
                <label for="inputPassword">Repetir Senha:</label>
                <div class="input-group mb-3">
                    <input type="password" class="form-control" placeholder="Repetir Senha" name="csenha" id="csenha" required><br>
                    <div class="input-group-append">
                        <button type="button" class="btn btn-dark" onclick="mostrarCSenha()"type="button">

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
            </div>
        </div>
        <br/>

                <script>
                   function mostrarCSenha(){
                       var tipo = document.getElementById("csenha");
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


                <h1 style="color:rgb(56, 52, 52)"><b><center>Cadastro Empresarial</center></b></h1><br>
            <div class="row">
                <div class="col">
                    <label for="inputEmail">Você tem uma empresa?</label><br>
                        <input type="radio"name="emp" id="emp" value="Sim" required autofocus>Sim
                        <input type="radio" name="emp" id="emp" value="Não">Não
                </div>
                 
                <div class="col">
                    <label for="inputEmail">CNPJ:</label>
                    <input type="text" id="cnpj" class="form-control" name="cnpj" placeholder="CNPJ" required>
                </div>
            </div>
            <br/>
                
            <div class="row">
               <div class="col">
                    <label for="inputEmail">Nome da empresa: </label>
                    <input type="text" id="nempresa" class="form-control" name="nempresa" placeholder="Nome da empresa" required>
                </div>
                   
                <div class="col">
                    <label for="tserviço">Tipo de serviço:</label>
                        <select class="form-control " id="tserviço" name="tserviço" required>
                            <option value="">...</option>
                            <option value="Alimentícia">Alimentícia</option>
                            <option value="Automotivo">Automotivo</option>
                            <option value="Agropecuária">Agropecuária</option>
                            <option value="Ecônomica">Ecônomica</option>
                            <option value="Turismo">Turismo</option>
                            <option value="Varejista">Varejista</option>
                            <option value="Marketing">Marketing</option>
                            <option value="Tecnologia">Tecnologia</option>
                    </select>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col">
                    <label for="inputEmail">Endereço Empresa: </label>
                    <input type="text" id="endem" class="form-control" name="endem" placeholder="Endereço Empresa" required>
                </div>
                
                <div class="col">
                   <label for="inputEmail">Perfil (1-Admin; 2-User):</label>
                        <select class="form-control " id="estado" name="perfil">
                            <option value="">...</option>
                            <option value="<?php echo $f['fk_idProfile']; ?>">Admin</option>
                        </select>
                </div>
            </div><br/>

                <label for="inputEmail">Gostaria de ter uma parceria com a X-MAX? </label>
                    <input type="radio"name="parceria" id="parceria" value="Sim" required>Sim
                    <input type="radio" name="parceria" id="parceria" value="Não" required>Não<br>
               
               

                <div class="checkbox mb-3"><br>
                    <center>
                        <label>
                            <input type="checkbox" value="Lembre-me"> Lembre-me<br><hr>
                            <input type="checkbox" value="Termos de política e privacidade" required>
                             Aceita os <a href="#" style="color: green;"><u>termos de política e privacidade</u></a> da empresa X-MAX?
                        </label>
                    </center>
                </div>

                <hr>

                <button class="btn btn-lg btn-success btn-block" type="submit" value="submit" name="reg">Cadastrar</button>


            </form>
            <a href="login.php" style="margin-top: 5px;" class="btn btn-lg btn-primary btn-block">Se já é cadastrado faça Login</a>
   
            
    </div>

</form>

          <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
          <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>
</html>