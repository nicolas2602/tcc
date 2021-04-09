<?php include 'php/conexao.php';?>
<?php include 'php/insert3.php';?>


<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="Tcc.css">
    <link rel="stylesheet" type="text/css" href="navbar.css">
    <title>XMAX</title>

</head>

<body>


<nav class="navbar navbar-expand-md navbar-dark bg-dark mb-4">
    	<a class="navbar-brand" href="#"><img alt="menu" src="menu_icon.png" width="50px"></a>
    	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
    		<span class="navbar-toggler-icon"></span>
    	</button>

    	<div class="collapse navbar-collapse" id="navbarCollapse">
    		<ul class="navbar-nav mr-auto">
    			<li class="nav-item active">
    				<a href="Principal.php" class="nav-link btn btn-dark">Inicio<span class="sr-only">(atual)</span></a>
    			</li>
    			<li class="nav-item">
    				<a href="login.php" class="nav-link btn btn-dark" onclick="login()"><img alt="login" src="login_icon.png" width="30px"></a>
    			</li>
          <li class="nav-item">
    				<a href="users.php" class="nav-link btn btn-dark"><img alt="login" src="perfil_icon.png" width="30px"></a>
    			</li>
          <li class="nav-item">
    				<a href="pdf/quem_somos.pdf" class="nav-link btn btn-dark"><img alt="info" src="info_icon.png" width="30px"></a>
    			</li>
    		</ul>

    		<form class="form-inline mt-02 mt-md-0">
    			<input type="text" class="form-control mr-sm-2" placeholder="Pesquisar" aria-label="Pesquisar">
    			<button type="submit" class="btn btn-dark"><img alt="pesquisa" src="src_icon.png" width="40px"></button>
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
<center>
  <main role="main" class="container col-sm-10">
    
  <div class="jumbotron bg-light rounded">
  <center><div class="logo"><img src="logo1.png" alt="logo"></div></center>


  <p><div class="form-group">
     <div class="form-group">
     <div class="col">
      <label class="text-left"><b style="color:black">Endereço:</b></label>
      <input type="text" name="endereco" class="form-control col-sm-3" placeholder="Insira o endereço" required autofocus>
      </div>
    </div>

    <div class="form-group">
    <label for="pagamento" class="text-left"><b style="color:black">Pacote Selecionado:</b></label>
    <select class="form-control col-sm-3" id="pagamento" name="pacote" required="Selecione o pacote">
       <option value="">...</option>
       <option value="Standart">Standart</option>
       <option value="Prime">Prime</option>
       <option value="MEGA ULTRA PREMIUM DELUX">MEGA ULTRA PREMIUM DELUX</option>
    </select><br/>
    </div>  

    <div class="form-group">
    <label for="pagamento" class="text-left"><b style="color:black">Formas de Pagamento:</b></label>
    <select class="form-control col-sm-3" id="pagamento" name="pagamento" required>
       <option value="">...</option>
       <option value="Dinheiro">Dinheiro</option>
       <option value="Cartão de Crédito">Cartão de Crédito</option>
       <option value="Cartão de Débito">Cartão de Débito</option>
    </select><br/>

    <div class="form-check">
      <input type="checkbox" class="form-check-input" id="dropdownCheck">
      <label class="form-check-label" for="dropdownCheck">
        Concordo que li e aceito os termos do serviço e diretrizes
      </label>
     </div>
<br>
     <div>
     <center>
     <button type="submit" class="btn btn-primary col-sm-3" style="color:white; align: left;" name="pag">Comprar</button>
     </center>
     </div>
      
      </div>
    </div>  
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
   
</form>
</body>
</html>