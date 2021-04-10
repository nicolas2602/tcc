<?php include 'php/conexao.php';?>
<?php include 'php/insert3.php';?>

<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/Tcc.css">
    <link rel="stylesheet" type="text/css" href="navbar.css">
    <title>XMAX</title>

</head>

<body>

<nav class="navbar navbar-expand-md navbar-dark bg-dark mb-4">
    	<a class="navbar-brand" href="#"><img alt="menu" src="imagens/menu_icon.png" width="50px"></a>
    	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
    		<span class="navbar-toggler-icon"></span>
    	</button>

    	<div class="collapse navbar-collapse" id="navbarCollapse">
    		<ul class="navbar-nav mr-auto">
    			<li class="nav-item active">
    				<a href="Principal.php" class="nav-link btn btn-dark">Inicio<span class="sr-only">(atual)</span></a>
    			</li>
    			<li class="nav-item">
    				<a href="login.php" class="nav-link btn btn-dark" onclick="login()"><img alt="login" src="imagens/login_icon.png" width="30px"></a>
    			</li>
          <li class="nav-item">
    				<a href="users.php" class="nav-link btn btn-dark"><img alt="login" src="imagens/perfil_icon.png" width="30px"></a>
    			</li>
          <li class="nav-item">
    				<a href="pdf/quem_somos.pdf" class="nav-link btn btn-dark"><img alt="info" src="imagens/info_icon.png" width="30px"></a>
    			</li>
    		</ul>

    		<form class="form-inline mt-02 mt-md-0">
    			<input type="text" class="form-control mr-sm-2" placeholder="Pesquisar" aria-label="Pesquisar">
    			<button type="submit" class="btn btn-dark"><img alt="pesquisa" src="imagens/src_icon.png" width="40px"></button>
    		</form>
    	</div>

  <script>

      function login(id) {
       var resposta = confirm("Deseja sair do site?");
       if (resposta == true) {
          window.location.href = "Principal.php?id="+id;
       }
       else{
         return false;
       }
     }

  </script>

</nav>
    
 

<form method="post" enctype="multipart/form-data">

<div id="menu">

<center><div class="logo"><img src="logo1.png" alt="logo"></div></center>



  </center>
<main role="main" class="container col-sm-10">
<div class="jumbotron bg-light">
   <center><div class="form-control col-sm-3 bg-primary rounded" style="color:white">Pacotes</div></center><br/><br/>

<div id="menu">


 <div class="row justify-content-around">
  <div class="jumbotron bg-white col-sm-15 rounded border border-dark" style="width:450px">
    <center>
    <div class="form-control bg-danger border border-light col-sm-8 rounded">
     <div class="form-check">
      <label class="form-check-label" for="exampleCheck1"><b style="color:white"><center>Standart</center></b></label>
     </div>
    </div><br/>
        <img style="width: 235px; border-radius: 50%;" src="imagens/bronze.png">
      </a><br/><br/>
       <label style="border-black">Preço:</label>
     <select class="form-control col-sm-7 bg-primary" id="pagamento" style="color:white" name="preço1" placeholder="Preço">
       <option class=" form-control bg-primary" style="color:white">FREE</option>
     </select>
     </center>
  </div>

  <div class="jumbotron bg-white col-sm-15 rounded border border-dark" style="width:450px">
     <center>
    <div class="form-control bg-secondary border-dark col-sm-8 rounded">
     <div class="form-check">
       <label class="form-check-label" for="exampleCheck1"><b style="color:white"><center>Prime</center></b></label>
     </div>
    </div>
    <br/>
        <a>
        <img style="width: 235px; border-radius: 50%;" src="imagens/prata.png">
       </a><br/><br/>
     <label style="border-black">Preço:</label>
     <select class="form-control col-sm-7 bg-primary" id="pagamento" style="color:white" name="preço2" placeholder="Preço">
     <option class=" form-control bg-primary" style="color:white">R$ 1.199,00</option>
     </select></center>
  </div>
</div>

<div class="row justify-content-around">
  <center><div class="jumbotron bg-white col-sm-15 rounded border border-dark" style="width:450px">
   
    <div class="form-control bg-warning border-dark col-sm-8 rounded">
     <div class="form-check">
       <label class="form-check-label" for="exampleCheck1"><b style="color:white"><CENTER>MEGA ULTRA PREMIUM DELUX</center></b></label>
     </div>
    </div>
     <br/>
     <a>
     <img style="width: 235px; border-radius: 50%;" src="imagens/ouro.png">
     </a><br/><br/>

     <label style="border-black">Preço:</label>
     <select class="form-control col-sm-7 bg-primary" id="pagamento" style="color:white" name="preço3" placeholder="Preço">
    <option class=" form-control bg-primary" style="color:white">R$ 2.299,00</option>
     </select>
  </center>
  </div>

<center>
<a href="compra.php" style="margin-top: 10px;" class="btn btn-lg btn-success btn-block col-5" type="submit" name="log"
   data-toggle="modal" data-target="#exampleModalCenter">
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cash" viewBox="0 0 16 16">
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