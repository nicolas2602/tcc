
<?php include 'php/conexao.php';?>
<?php include 'php/insert.php';?>



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
     
           <!--Data de Nascimento,  Gênero, telefone1 e telefone2(opcional), CPF, Empresa(sim/não), cnpj, Endereço Pessoal, Endereço Empresa, Complemento, CEP, 
           Cidade, Estado, termos de serviço,  -->   
           
           
            <label for="inputEmail">Nome completo: </label>
               <input type="text" id="inputUser" class="form-control" name="nome" placeholder="Nome completo" required autofocus><br/>
           
            
            <label for="inputEmail">Data de Nascimento:</label>
                <input type="date" id="inputUser" class="form-control" name="data" placeholder="Data de Nascimento" required autofocus><br/>

            <label for="inputEmail">Gênero:</label><br>
                    <input type="radio"name="gen" id="gen" value="Masculino" required>Masculino
                    <input type="radio" name="gen" id="gen" value="Feminino">Feminino
            <br><br>
            
            <label for="inputEmail">Endereço:</label>
                <input type="text" id="inputUser" class="form-control" name="end" placeholder="Endereço" required autofocus><br/>

            <label for="inputEmail">Cidade:</label>
                <input type="text" id="inputUser" class="form-control" name="city" placeholder="Cidade" required autofocus><br/>
            
            <div class="form-row">
                <div class="col">
                    <label for="inputEmail">Estado:</label>
                    <select class="form-control " id="pagamento" name="estado" required>
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
                    <input type="text" class="form-control" name="cep" placeholder="CEP">
                </div>
            </div><br>
                
            <label for="inputEmail">Telefone 1:</label>
                <input type="text" id="inputUser" class="form-control" name="tel" placeholder="Telefone (celular ou fixo)" required autofocus><br/>

            <label for="inputEmail">Telefone 2:</label>
                <input type="text" id="inputUser" class="form-control" name="tel2" placeholder="Telefone 2 (opcional)"><br/>
            
            <label for="inputEmail">CPF:</label>
                <input type="text" id="inputUser" class="form-control" name="cpf" placeholder="CPF" required autofocus><br/>

            <label for="inputEmail">E-mail:</label>
                <input type="email" id="inputEmail" class="form-control" name="email" placeholder="Endereço de e-mail" required autofocus><br/>

      
            <label for="inputPassword">Senha:</label>
                <input type="password" id="password" class="form-control" name="senha" placeholder="Senha" required><br/>
                    

            <label for="inputPassword">Repetir Senha:</label>
                <input type="password" class="form-control" placeholder="Repetir Senha" name="csenha" id="rsenha" required><br>


                <h1 style="color:rgb(56, 52, 52)"><b><center>Cadastro Empresarial</center></b></h1><br>

                <label for="inputEmail">Você tem uma empresa?</label><br>
                    <input type="radio"name="emp" id="emp" value="Sim" required autofocus>Sim
                    <input type="radio" name="emp" id="emp" value="Não">Não<br><br>

                <label for="inputEmail">CNPJ:</label>
                    <input type="text" id="inputUser" class="form-control" name="cnpj" placeholder="CNPJ" required><br/>
                
                <label for="inputEmail">Nome da empresa: </label>
                   <input type="text" id="inputUser" class="form-control" name="nempresa" placeholder="Nome da empresa" required><br/>

                   
                
                <label for="pagamento">Tipo de serviço:</label>
                    <select class="form-control " id="pagamento" name="tserviço" required>
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
                  
                  <br>
                
                <label for="inputEmail">Endereço Empresa: </label>
                   <input type="text" id="inputUser" class="form-control" name="end" placeholder="Endereço Empresa" required><br/>

                
                <label for="inputEmail">Gostaria de ter uma parceria com a X-MAX? </label>
                    <input type="radio"name="parceria" id="parceria" value="Sim" required>Sim
                    <input type="radio" name="parceria" id="parceria" value="Não" required>Não<br>
                
               
               

                <div class="checkbox mb-3"><br>
                    <center>
                        <label>
                            <input type="checkbox" value="Lembre-me" required> Lembre-me<br><hr>
                            <input type="checkbox" value="Termos de política e privacidade" required>
                             Aceita os <a href="#" style="color: green;"><u>termos de política e privacidade</u></a> da empresa X-MAX?
                        </label>
                    </center>
                </div>

                <hr>

                <button class="btn btn-lg btn-success btn-block" type="submit" value="submit" name="reg">Cadastrar</button>


            </form>
            <a href="index.php"><button style="margin-top: 5px;" class="btn btn-lg btn-primary btn-block" type="submit">Se já é cadastrado faça Login</button></a>
   
            
    </div>

</form>

          <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
          <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>
</html>