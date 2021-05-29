<?php include 'php/conexao.php';?>
<?php include 'php/insert3.php';?>
<?php 
include 'php/select2.php';
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="css/Tcc.css">
        <link rel="stylesheet" type="text/css" href="navbar.css">
        <title>X-MAX</title>
    </head>

    <body>

      <?php include 'include/nav.php';?>
          

      <form method="post" enctype="multipart/form-data">

      <div id="menu">

      <!-- <center><div class="logo"><img src="Imagens/logo1.png" alt="logo"></div></center> -->

            <hr>

        </center>
      <main role="main" class="container col-sm-10">
      <div class="jumbotron bg-light">
        <hr><center><div class="display-3">Pacotes</div></center><br/><hr>

   <div id="menu">


      <div class="row">

        <div class="card col-sm" style="width: 25rem;">
          <center>
            <img class="card-img-top" style="width: 235px; border-radius: 50%;" src="imagens/bronze.png" alt="Card image cap">
          </center>
              
            <div class="card-body bg-danger text-white">
                <h5 class="card-title">Standart</h5>
                <h1 class="card-title pricing-card-title">FREE</h1>
              </div>
              <ul class="list-group list-group-flush">
                <li class="list-group-item">Programa de monitoramento </li>
                <li class="list-group-item">Programa de escaneamento</li>
                <li class="list-group-item">Criptografia e backup com sombra 30G</li>
              </ul>
             
        </div>



        <div class="card col-sm" style="width: 25rem;">
            <center>
              <img class="card-img-top" style="width: 227px; border-radius: 50%;" src="imagens/prata.png" alt="Card image cap">
            </center>
                
              <div class="card-body bg-secondary text-white">
                  <h5 class="card-title">Prime</h5>
                  <h1 class="card-title pricing-card-title">R$ 1.199,00</h1>
                </div>
                <ul class="list-group list-group-flush">
                  <li class="list-group-item">Programa de escaneamento</li>
                  <li class="list-group-item">Suporte especial e técnico</li>
                  <li class="list-group-item">Sem limite de dados de backups</li>
                </ul>
               
        </div>

        <div class="card col-sm" style="width: 25rem;">
          <center>
            <img class="card-img-top" style="width: 227px; border-radius: 50%;" src="imagens/ouro.png" alt="Card image cap">
          </center>
              
            <div class="card-body bg-warning text-white">
                <h5 class="card-title">MEGA ULTRA PREMIUM DELUXE</h5>
                <h1 class="card-title pricing-card-title">R$ 2.299,00</h1>
              </div>
              <ul class="list-group list-group-flush">
                <li class="list-group-item">Todas as anteriores (Standart e Premium)</li>
                <li class="list-group-item">Programa de ajuda e suporte a códigos PHP, SQL e JavaScript</li>
              </ul>
              
        </div>
      </div>


        <hr>
      <center>
        <a href="compra.php" style="margin-top: 10px;" class="btn btn-lg btn-success btn-block col-5 text-white" type="submit" name="log"
          data-toggle="modal" data-target="#exampleModalCenter">

          <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" fill="currentColor" class="bi bi-cash" viewBox="0 0 16 16">
            <path d="M8 10a2 2 0 1 0 0-4 2 2 0 0 0 0 4z"/>
            <path d="M0 4a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1V4zm3 0a2 2 0 0 1-2 2v4a2 2 0 0 1 2 2h10a2 2 0 0 1 2-2V6a2 2 0 0 1-2-2H3z"/>
          </svg>

          Pagamento
        </a>

        <?php include 'include/compra.php';?>

    </div>
      </center>
      </main>
        

      </form>

      <?php include 'include/footer.php'; ?>


          <!-- JavaScript (Opcional) -->
          <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
          <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
          <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    </body>

</html>