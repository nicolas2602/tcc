<?php include 'php/conexao.php';?>
<?php include 'php/insert4.php';?>
<?php include 'php/check2.php';?>


<html>
  <head>
    <title>Avaliação</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/Tcc.css">
    <title>X-MAX</title>
  </head>

  <body>
      <br/><br/><br/>

    <form method="post" enctype="multipart/form-data">
      
        
      <div class="jumbotron container bg-light col-sm-4 rounded border border-dark ">
      <center>
          <h4 style="color:black">Registro de Pagamento</h4>
      </center>

        <div class="form-group">
        <div class="form-group">
        <div class="col">
          <label class="text-left"><b style="color:black">Endereço:</b></label>
          <input type="text" name="endereCo" class="form-control " placeholder="Insira o endereço" required autofocus>
          </div>
        </div>

        <div class="form-group">
        <div class="form-group">
        <div class="col">
          <label class="text-left"><b style="color:black">CEP:</b></label>
          <input type="text" name="CEP" class="form-control" placeholder="Insira o CEP" required autofocus>
          </div>
        </div>

        <div class="form-group">
        <div class="form-group">
        <div class="col">
          <label class="text-left"><b style="color:black">Email:</b></label>
          <input type="text" name="email" class="form-control" placeholder="Insira o Email" required autofocus>
          </div>
        </div>

        <div class="form-group">
        <div class="col">
        <label for="pagamento" class="text-left"><b style="color:black">Formas de Pagamento:</b></label>
        <select class="form-control " id="pagamento" name="pagamento" required>
          <option value="">...</option>
          <option value="Dinheiro">Dinheiro</option>
          <option value="Cartão de Crédito">Cartão de Crédito</option>
          <option value="Cartão de Débito">Cartão de Débito</option>
        </select>
        </div>
        </div>
        <br/>

        <p><center>
        <div id="welcome">
          <button type="submit" onclick="pago()" class="btn btn-primary col-sm-3" name="reg" style="color:light"><b>Registrar</b></button>
        </div></center>
        </p>

        <p><center>
        <div id="welcome">
          <a type="submit" class="btn btn-secondary col-sm-3" name="cadastar" style="color:light" href="Principal.php"><b>Voltar</b></a>
        </div></center>
        </p>
          
          </div>
        </div>  
      
      </main>
      
    </form>


      <script>
        function pago()
        {
            alert("Deseja concluir o pagamento?");
        }
      </script>


  </body>



</html>
