<?php 
    include 'php/conexao.php';
    include 'php/check.php';
    include 'php/select2.php';
    include 'php/check.php';
?>


<!DOCTYPE html>
<html lang="pt-br">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
      <link rel="stylesheet" type="text/css" href="css/Tcc.css">
      <link rel="stylesheet" type="text/css" href="navbar.css">
      <title>X-MAX</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
  </head>

  <body>

      <?php include 'include/nav.php';?> 
      
      <form method="POST" enctype="multipart/form-data">
        <table class="table table-borderless text-center">
          <thead class="thead-dark">
            <tr>
             <th scope="col">Foto</th>
              <th scope="col">Código</th>
              <th scope="col">Nome</th>
              <th scope="col">E-mail</th>
              <th scope="col">Status</th>
              <th scope="col">Ativar ou Desativar</th>
            </tr>
          </thead>
          

          <?php
            $sq=" 
            select * from registro where fk_idProfile = 2
            ";
            $qu=mysqli_query($con,$sq);
            while($f=  mysqli_fetch_assoc($qu)){
          ?>
              <tr> 
                 
                 <td>
                    <img src="<?php echo $f['imagem'];?>" width="60px" height="60px">
                 </td>
                 
                 <td>
                    <?php echo $f['IdRegistro']?>
                 </td>

                  <td>
                    <?php echo $f['nomeCadastro']?>
                  </td>
                  
                  <td>
                    <?php echo $f['emailCadastro']?>
                  </td>
                  
                  <td>
                    <?php   
                    if($f['status_user'] == 0){
                         echo "<div class='bg-success text-white'>ON</div>";
                    }
                    if($f['status_user'] == 1){
                      echo "<div class='bg-danger text-white'>OFF</div>";
                    }
                    ?>
                  </td>

                  <td>
                    <div class="btn-group" role="group" aria-label="Basic example">
                      <a class="btn btn-success" href="ativar.php?act=<?php echo $f['IdRegistro']?>" onclick="return confirm('Ativar a conta do usuário?')">ON</a>
                      <a class="btn btn-danger" href="desativar.php?dct=<?php echo $f['IdRegistro']?>" onclick="return confirm('Desativar a conta do usuário?')">OFF</a>
                    </div>              
                  </td>
            
              </tr>

          <?php
            }
          ?>


        </table>
      </form>

          <!-- JavaScript (Opcional) -->
          <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
          <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
          <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

  </body>
</html>