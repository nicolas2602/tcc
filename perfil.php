<?php 
     include 'php/conexao.php';
     include 'php/select2.php';
     include 'php/logger.php';
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="css/Tcc2.css">
        <title>Perfil</title>
    </head>
    
    <body>

        <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>


        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-6">
                    <hr class="my-4"><h1 class="display-4 text-center">Perfil</h1><hr class="my-4">
                    <div class="well well-sm">
                        <div class="row">
                            <div class="col-sm-6 col-md-4">
                                <img  src="<?php echo $f['imagem'] ?>" alt="" class="img-rounded img-responsive" />
                            </div>
                            <div class="col-sm-6 col-md-8">
                                <h4>
                                    <?php echo $f['nomeCadastro'] ?>
                                </h4>
                                    <small>
                                        <cite title="San Francisco, USA"><?php echo $f['cidade']?>, <?php echo $f['estado'] ?>
                                            <i class="glyphicon glyphicon-map-marker"></i>
                                        </cite>
                                    </small>
                                <p>
                                    <i class="glyphicon glyphicon-envelope"></i><?php echo $f['emailCadastro'] ?>
                                    <br/>
                                    <i class="glyphicon glyphicon-gift"></i><?php echo $f['dataN'] ?>
                                    <br/>
                                    <i class="glyphicon glyphicon-phone"></i><?php echo $f['tel1'] ?>
                                </p>

                                
                            </div>
                        </div>
                    </div>
                      
                </div>
            </div>  
                        <div class="btn-group">
                            <a href="Principal.php" type="button" class="btn btn-primary">
                                Voltar
                            </a>
                        </div>
        </div>
        
    </body>
    
</html>