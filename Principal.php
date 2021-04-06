<?php include 'php/conexao.php';?>
<?php include 'php/insert3.php';?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="Tcc.css">
    <title>XMAX</title>
</head>

<body>
<form method="post" enctype="multipart/form-data">

<div id="menu">
<nav class="navbar navbar-expand-lg navbar-light bg-light justify-content-md-center">
   <center>   
   
    <a class="navbar-brand" href="Principal.php">Início</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
      </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link active" href="pdf/quem_somos.pdf">Quem Somos <span class="sr-only"></span></a>
      <a class="nav-item nav-link" href="pdf/serviços.pdf">Serviços</a>
    </div>
  </div>
  </center>
</nav>

<center><img alt="logomarca" src="imagens/logo1.png" width="300px"><center/>

<main role="main" class="container-fluid col-sm-10">
<div class="jumbotron bg-white rounded">

<h2>Perfil</h2>

<?php
$sq="select * from registro";
$qu=mysqli_query($con,$sq);
while($f=  mysqli_fetch_assoc($qu)){
?>
<div class="row justify-content-center">
      <div class="form-group col-md-3">
      <img src="<?php echo $f['imagem'];?>" width="200px" height="200px">
      </div>
</div>

<div class="row justify-content-center">

      <div class="form-group col-md-5">
      <b>Nome:</b>
         <label class="form-control mb-2 mr-sm-2"><?php echo $f['nomeCadastro'];?></label>
      </div>
      <br><br>
    
      <div class="form-group col-md-7">
       <b>E-mail:</b>
       <label class="form-control mb-2 mr-sm-2"><?php echo $f['emailCadastro'];?></label>
      </div>
     </div>

<?php } ?>

</div>
</main>

  </center>
<main role="main" class="container col-sm-10">
<div class="jumbotron bg-light">
   <center><div class="form-control col-sm-3 bg-primary rounded" style="color:white">Pacotes</div></center><br/><br/>

<div id="menu">


 <div class="row justify-content-around">
  <div class="jumbotron bg-white col-sm-15 rounded border border-dark" style="width:450px">
    <center>
    <div class="form-control bg-secondary border border-light col-sm-8 rounded">
     <div class="form-check">
      <label class="form-check-label" for="exampleCheck1"><b style="color:white"><center>Standart</center></b></label>
     </div>
    </div><br/>
        <img style="width: 235px; border-radius: 50%;" src="data:image/jpeg;base64,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">
      </a><br/><br/>
       <label style="border-black">Preço:</label>
     <select class="form-control col-sm-7 bg-primary" id="pagamento" style="color:white" name="preço1" placeholder="Preço">
       <option class=" form-control bg-primary" style="color:white">FREE</option>
     </select>
     </center>
  </div>

  <div class="jumbotron bg-white col-sm-15 rounded border border-dark" style="width:450px">
     <center>
    <div class="form-control bg-dark border-dark col-sm-8 rounded">
     <div class="form-check">
       <label class="form-check-label" for="exampleCheck1"><b style="color:white"><center>Prime</center></b></label>
     </div>
    </div>
    <br/>
        <a>
        <img style="width: 235px; border-radius: 50%;" src="data:image/jpeg;base64,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">
       </a><br/><br/>
     <label style="border-black">Preço:</label>
     <select class="form-control col-sm-7 bg-primary" id="pagamento" style="color:white" name="preço2" placeholder="Preço">
     <option class=" form-control bg-primary" style="color:white">R$ 1.199,00</option>
     </select></center>
  </div>
</div>

<div class="row justify-content-around">
  <center><div class="jumbotron bg-white col-sm-15 rounded border border-dark" style="width:450px">
   
    <div class="form-control bg-primary border-dark col-sm-8 rounded">
     <div class="form-check">
       <label class="form-check-label" for="exampleCheck1"><b style="color:white"><CENTER>MEGA ULTRA PREMIUM DELUX</center></b></label>
     </div>
    </div>
     <br/>
     <a>
     <img style="width: 245px; height: 120px; border-radius: 50%;" src="data:image/jpeg;base64,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">
     </a><br/><br/>

     <label style="border-black">Preço:</label>
     <select class="form-control col-sm-7 bg-primary" id="pagamento" style="color:white" name="preço3" placeholder="Preço">
    <option class=" form-control bg-primary" style="color:white">R$ 2.299,00</option>
     </select>
  </center>
  </div>
</main>
  
<center>
  <main role="main" id="pizzaApp" class="container col-sm-10">
    
  <div class="jumbotron bg-light rounded">
   
  <p><div class="form-group">
     <div class="form-group">
     <div class="col">
      <label class="text-left"><b style="color:black">Endereço:</b></label>
      <input type="text" name="endereco" class="form-control col-sm-3" placeholder="Insira o endereço" required autofocus>
      </div>
    </div>

    <div class="form-group">
    <label for="pagamento" class="text-left"><b style="color:black">Pacote Selecionado:</b></label>
    <select class="form-control col-sm-3" id="pagamento" name="pacote" required="required">
       <option>...</option>
       <option value="Standart">Standart</option>
       <option value="Prime">Prime</option>
       <option value="MEGA ULTRA PREMIUM DELUX">MEGA ULTRA PREMIUM DELUX</option>
    </select><br/>
    </div>  

    <div class="form-group">
    <label for="pagamento" class="text-left"><b style="color:black">Formas de Pagamento:</b></label>
    <select class="form-control col-sm-3" id="pagamento" name="pagamento" required="required">
       <option>...</option>
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
     <button type="submit" class="btn btn-primary col-sm-3" style="color:white; align: left;" name="pag"><b>Comprar</b></button>
     </center>
     </div>
      
      </div>
    </div>  
   
   </main>
 </form>
</body>
</html>