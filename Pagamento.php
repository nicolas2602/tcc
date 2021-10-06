<?php 
  include 'php/conexao.php';
  include 'php/insert4.php';
  include 'php/check.php';
?>


<!DOCTYPE html>
<html lang="pt-br">
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
      

    
      <div class="jumbotron container bg-light col-sm-4 h-80 rounded border border-dark ">

      <center>
          <h4 style="color:black">Registro de Pagamento</h4>
      </center>

        <div class="form-group">
          <div class="form-group">
            <div class="col">
              <label class="text-left"><b style="color:black">Confira endereço correto:</b></label>
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
  
        <div class="col">
          <label for="pagamento" class="text-left"><b style="color:black">Formas de Pagamento:</b></label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="pagamento" id="pagamento" value="Boleto" required>
                <label class="form-check-label" for="pagamento">
                  Boleto
                </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="pagamento" id="pagamento" value="Cartão de Crédito">
              <label class="form-check-label" for="pagamento">
                Cartão de Crédito
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="pagamento" id="pagamento" value="Pix">
              <label class="form-check-label" for="pagamento">
                Pix
              </label>
            </div>
        </div>
  
        <hr>

        <p>
        <div id="registrar" class="text-center">
          <button type="submit" onclick="return confirm('Deseja concluir a compra?')" class="btn btn-success col-sm-11" name="reg" style="color:light"><b>Comprar</b></button>
        </div>
        </p>

         <p>
        <div id="welcome" class="text-center">
          <a type="submit" class="btn btn-secondary col-sm-11" name="cadastar" style="color:light" href="Pacote.php"><b>Voltar</b></a>
        </div>
        </p> 
          
          </div>
        </div>  
      
      </main>
      
    </form>

  </body>
</html>
