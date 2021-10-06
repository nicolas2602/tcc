<?php 
  include 'php/conexao.php';
  include 'php/select2.php';
  include 'php/insert2.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/Tcc.css">
    <link rel="stylesheet" type="text/css" href="navbar.css">
    <title>X-MAX</title>
</head>

<style>
  #jumb{
    padding-top: 50px;
  }
</style>

<body>
  <?php include 'include/nav.php';?>
  
  <div id="jumb">
    <div class="jumbotron container bg-light col-sm-10 rounded border border-dark ">
      <form method="post" enctype="multipart/form-data">
        <h1 style="color:rgb(56, 52, 52)"><b><center>Cadastro Empresarial</center></b></h1><br>
          <div class="row">               
              <div class="col">
                  <label for="inputEmail">CNPJ:</label>
                  <input type="text" id="cnpj" class="form-control" name="cnpj" placeholder="CNPJ" required>
              </div>

              <br/>
              
              <div class="col">
                  <label for="inputEmail">Nome da empresa: </label>
                  <input type="text" id="nempresa" class="form-control" name="nempresa" placeholder="Nome da empresa" required>
              </div>
                  
              <div class="col">
                  <label for="tserviço">Tipo de serviço:</label>
                      <select class="form-control " id="tserviço" name="tserviço" required>
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
              </div>
            </div>
          <br>

          <div class="row">
              <div class="col">
                  <label for="inputEmail">Endereço Empresa: </label>
                  <input type="text" id="endem" class="form-control" name="endem" placeholder="Endereço Empresa" required>
              </div>
          </div>
          
          <hr>

          <div class="text-center">
            <label for="inputEmail">Gostaria de ter uma parceria com a X-MAX? </label>
            <input type="radio"name="parceria" id="parceria" value="Sim" required>Sim
            <input type="radio" name="parceria" id="parceria" value="Não" required>Não<br>
          </div>  

          <hr>

          <button class="btn btn-lg btn-success btn-block" type="submit" value="submit" name="reg">Cadastrar</button>

      </form>
    </div>
  </div>

  <div class="d-flex justify-content-center">
    <table class="table table-dark table-striped text-center col-sm-10 table-sm">
      <thead>
        <tr>
          <th scope="col">CNPJ</th>
          <th scope="col">Nome da empresa</th>
          <th scope="col">Serviço</th>
          <th scope="col">Endereço</th>
        </tr>
      </thead>
      <?php 
        $sql = "select * from empresa where fk_IdRegistro='$_SESSION[IdRegistro]'";
        $queryEmp = mysqli_query($con, $sql);
        while($emp = mysqli_fetch_array($queryEmp)){
               $cnpj = $emp['cnpj'];
               $nome = $emp['nomeEmpresa'];
               $tserv = $emp['tservico'];
               $end = $emp['endEmpresa'];
           
      ?>
      <tbody>
        <tr>
          <td><?=$cnpj?></td>
          <td><?=$nome?></td>
          <td><?=$tserv?></td>
          <td><?=$end?></td>
        </tr>
      </tbody>

      <?php } ?>

    </table>
  </div>

  <?php include 'include/footer.php';?>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>