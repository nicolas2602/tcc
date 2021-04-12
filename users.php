<?php
  include 'php/conexao.php';
?>


<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
      <link rel="stylesheet" type="text/css" href="css/Tcc.css">
      <link rel="stylesheet" type="text/css" href="navbar.css">
      <title>XMAX</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
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
    				<a href="users.php" class="nav-link btn btn-dark"><img alt="login" src="Imagens/perfil_icon.png" width="30px"></a>
    	        </li>
                <li class="nav-item">
    				<a href="pdf/quem_somos.pdf" class="nav-link btn btn-dark"><img alt="info" src="Imagens/info_icon.png" width="30px"></a>
    	       </li>

    	    </ul>


    		<form class="form-inline mt-02 mt-md-0">
    			<input type="text" class="form-control mr-sm-2" placeholder="Pesquisar" aria-label="Pesquisar">
    			<button type="submit" class="btn btn-dark"><img alt="pesquisa" src="Imagens/src_icon.png" width="40px"></button>
    		</form>
    	</div>



</nav>


      <table class="table table-borderless text-center">
        <thead class="thead-dark">
          <tr>
            <th scope="col">Nome</th>
            <th scope="col">E-mail</th>
            <th scope="col">Foto</th>
          </tr>
        </thead>
        

        <?php
          $sq="select * from registro";
          $qu=mysqli_query($con,$sq);
          while($f=  mysqli_fetch_assoc($qu)){
        ?>
            <tr>
                <td>
                  <?php echo $f['nomeCadastro']?>
                </td>
                
                <td>
                  <?php echo $f['emailCadastro']?>
                </td>

                <td>
                  <img src="<?php echo $f['imagem'];?>" width="80px" height="80px">
                </td>
            </tr>

        <?php
          }
        ?>


      </table>
  </body>
</html>