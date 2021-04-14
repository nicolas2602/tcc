<?php 
    include 'php/conexao.php';
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
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
  </head>

  <body>

      <?php include 'include/nav.php';?> 

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