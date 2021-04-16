<?php 
    include 'php/conexao.php';
    include 'php/insert3.php';
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
     
      <!-- <center><div class="logo"><img src="Imagens/logo1.png" alt="logo"></div></center> -->

      <div id="carousel" class="carousel slide" data-ride="carousel">

        <ol class="carousel-indicators">
          <li data-target="#carousel" data-slide-to="0" class="active"></li>
          <li data-target="#carousel" data-slide-to="1"></li>
          <li data-target="#carousel" data-slide-to="2"></li>
        </ol>
        
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100 img-fluid"  src="Imagens/1.png" alt="First slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100 img-fluid" src="Imagens/2.png" alt="Second slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100 img-fluid" src="Imagens/3.png" alt="Third slide">
          </div>
        </div>

        <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>

     </div>
 
        

    <form method="post" enctype="multipart/form-data">

      <br><div class="display-3 text-center">Nossas Especialidades</div><br/><br>
      <center>
      <div class="container marketing">
      
        <div class="row">
          <div class="col">
            <img class="rounded-circle" src="Imagens/php.svg.png" alt="Generic placeholder image" width="300" height="250">           
          </div>
          <div class="col">
            <img class="rounded-circle" src="Imagens/sql.png" alt="Generic placeholder image" width="260" height="260">
          </div>
      </div></center><hr>

    <center>
    <div class="jumbotron bg-light col-sm-10">
      <div class="container marketing">
      <center>
      <hr><div class="display-3 text-center">Seguranças</div><hr/>
       <div class="row justify-content-between">
       <div class="col-5">
        <div class="card" style="width: 30rem;">
          <img class="card-img-top" src="Imagens/bd.jpg" alt="Imagem de capa do card" width="290" height="250"><hr>
          <div class="card-body">
            <p class="card-text">
            
             Proteção e Backup do Banco de Dados.
            
            </p>
          </div>
          </div>
        </div>
       
        <div class="col-5">
        <div class="card" style="width: 30rem;">
          <img class="card-img-top" src="Imagens/php.jpg" alt="Imagem de capa do card" width="290" height="250"><hr>
          <div class="card-body">
            <p class="card-text">
              Realizaremos os códigos dos nossos clientes e
              vamos fazer uma inspeção e otimização dos
              códigos.
            </p>
          </div>
        </div>
        </div>
      </center>
      </div>
     
      <div class="container marketing"><br>
      <center>
       <div class="row justify-content-between">
       <div class="col-5">
        <div class="card" style="width: 30rem;">
          <img class="card-img-top" src="Imagens/estatistica.png" alt="Imagem de capa do card" width="290" height="250"><hr>
          <div class="card-body">
            <p class="card-text">
            
             Monitoramos estatísticas da empresa.
            
            </p>
          </div>
          </div>
        </div>
       
        <div class="col-5">
        <div class="card" style="width: 30rem;">
          <img class="card-img-top" src="Imagens/seguranca.jpg" alt="Imagem de capa do card" width="290" height="250"><hr>
          <div class="card-body">
            <p class="card-text">
              Serviços de segurança da rede com atualizações
              frequentes.
            </p>
          </div>
        </div>
        </div>
      </center>
      </div>
      </div>
    </center> 

    </form>

          <footer class="my-5 pt-5 text-muted text-center text-small">
            <p>&copy; 2021 - XMAX Corporation</p>
            <ul class="list-inline">
              <li class="list-inline-item"><a href="#">Privacidade</a></li>
              <li class="list-inline-item"><a href="#">Termos</a></li>
              <li class="list-inline-item"><a href="#">Suporte</a></li>
            </ul>
          </footer>


          <!-- JavaScript (Opcional) -->
          <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
          <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
          <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

  </body>

</html>