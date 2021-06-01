<?php

include 'php/conexao.php';
include 'php/edit_car.php'

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="css/Tcc.css">
        <title>X-MAX</title>
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script>
            function previewFile(input){
                var file = $("input[type=file]").get(0).files[0];
        
                if(file){
                    var reader = new FileReader();
        
                    reader.onload = function(){
                        $("#previewImg").attr("src", reader.result);
                    }
        
                    reader.readAsDataURL(file);
                }
            }
        </script>
    <title>Document</title>
</head>
<body>

    <br>

    <div class="jumbotron container bg-light col-sm-6 rounded border border-dark" >

        <form class="form-signin" method="post" enctype="multipart/form-data">
            <h2 style="color:rgb(56, 52, 52)"><b><center>Atualizar Produto</center></b></h2>
            <img class="img-thumbnail mx-auto d-block border border-secondary rounded-0" id="previewImg" width="211px" height="211px"
                src="<?php echo $resultProd['foto_produto']?>">

            <center>
                <div class="file btn btn-secondary btn-square" style="position: relative; overflow: hidden; border-radius: 0;"> 
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-images" viewBox="0 0 16 16">
                        <path d="M4.502 9a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z"/>
                        <path d="M14.002 13a2 2 0 0 1-2 2h-10a2 2 0 0 1-2-2V5A2 2 0 0 1 2 3a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2v8a2 2 0 0 1-1.998 2zM14 2H4a1 1 0 0 0-1 1h9.002a2 2 0 0 1 2 2v7A1 1 0 0 0 15 11V3a1 1 0 0 0-1-1zM2.002 4a1 1 0 0 0-1 1v8l2.646-2.354a.5.5 0 0 1 .63-.062l2.66 1.773 3.71-3.71a.5.5 0 0 1 .577-.094l1.777 1.947V5a1 1 0 0 0-1-1h-10z"/>
                    </svg>
                    Selecione uma imagem
                    <input type="file" name="f1" id="file" onchange="previewFile(this);" 
                    style="border-radius: 0; position: absolute; font-size: 50px; opacity: 0; right: 0; top: 0;">
                </div>
            </center>
            <input type="hidden" name="img1" value="<?php echo $resultProd['foto_produto']?>" id="upload"><br/>

                <div class="row">
                    <div class="col">
                        <label for="inputEmail">Nome do Produto </label>
                        <input readonly="readonly" class="form-control" type="text" name="id" value="<?php echo $resultProd['ID_PRODUTO']?>">
                    </div>
                </DIV>
                
                <div class="row">
                    <div class="col">
                        <label for="inputEmail">Nome do Produto </label>
                        <input type="text" id="nome" class="form-control" name="prod" value="<?php echo $resultProd['NOME_PRODUTO']?>" required autofocus><br/>
                    </div>
                    
                    <div class="col">
                        <label for="inputEmail">Preço</label>
                        <input type="number" id="data" class="form-control" name="price" value="<?php echo $resultProd['preco']?>" required autofocus><br/>
                    </div>
                </div>


                <div class="row">
                    <div class="col">
                    <a href="carrinho.php" class="btn btn-lg btn-danger btn-block" name="up">Voltar</a>
                    </div>
                    <div class="col">
                    <input type="submit" class="btn btn-lg btn-primary btn-block" value="Atualizar" name="up"/>
                    </div>    
                </div>

        </form>
    </div>

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>
</html>
      
     
         

         
