<?php 
    include 'php/conexao.php';
    include 'php/select.php';
    include 'php/select2.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/Tcc.css">
    <title>X-MAX</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
</head>

<Style>
  /* hr {
    clear: both;
    visibility: hidden;
  } */
  body{
      /* overflow-y: scroll; */
      overflow-x: hidden;
  }  
</Style>

<body>
    
    <?php include 'include/nav.php'; ?>
    <hr style="clear: both; visibility: hidden;">
    
    <div class="row justify-content-center">
     <h3 class="col-md-9 text-left">Número de cadastros e acessos</h3><hr  style="clear: both; visibility: hidden;">
       <div class="col-md-3">
            <div class="card bg-secondary text-white" style="width: 20rem;">
                <div class="card-body">
                    <h5 class="card-title">
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-people-fill" viewBox="0 0 16 16">
                            <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                            <path fill-rule="evenodd" d="M5.216 14A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216z"/>
                            <path d="M4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z"/>
                        </svg>
                        Total de Usuários:
                    </h5><hr>
                    <center>
                        <?php 
                            $sq="select IdRegistro from registro where fk_idProfile=2 order by IdRegistro";
                            $qu=mysqli_query($con,$sq);
                            $row=mysqli_num_rows($qu);
                            
                            echo"<h1>$row</h1>";
                        ?>
                    <center>
                </div>
            </div>
        </div>
        
        <div class="col-md-3">
            <div class="card bg-primary text-white" style="width: 20rem;">
                <div class="card-body">
                    <h5 class="card-title">
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                            <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                        </svg>
                       Total de Administradores:
                    </h5><hr>
                    <center>
                        <?php 
                            $sq="select IdRegistro from registro where fk_idProfile=1 order by IdRegistro";
                            $qu=mysqli_query($con,$sq);
                            $row=mysqli_num_rows($qu);
                            
                            echo"<h1>$row</h1>";
                        ?>
                    </center>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card bg-light text-dark" style="width: 20rem;">
                <div class="card-body">
                    <h5 class="card-title">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-clock-fill" viewBox="0 0 16 16">
                            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z"/>
                        </svg>
                        Total de Acessos:
                    </h5><hr>
                    <center>
                        <?php 
                            $sq="SELECT IdLogging FROM logging order by IdLogging";
                            $qu=mysqli_query($con,$sq);
                            $row=mysqli_num_rows($qu);
                            
                            echo"<h1>$row</h1>";
                        ?>
                    </center>
                </div>
            </div>
        </div>
    </div><br>
    
    <div class="row justify-content-center">
    <div class="col-md-9">
     <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
        <script type="text/javascript">
        google.charts.load('current', {'packages':['corechart']});
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {
            var data = google.visualization.arrayToDataTable([
            ['data', 'Usuário'],
            
            <?php 
            
            $sq="SELECT * FROM logging";
            $qu=mysqli_query($con,$sq);
            while($item = mysqli_fetch_assoc($qu))
            {

                $IdLogging = $item['fk_registro'];
                $data = $item['dateLogging'];
            
            ?>

            ['<?php echo date('d/m/Y H:i:s', strtotime($data)); ?>', <?php echo $IdLogging ?> ],
            <?php } ?>
            ]);

            var options = {
            title: 'Estatística de Acessos',
            curveType: 'function',
            backgroundColor: '#e6f2ff',
            legend: { position: 'none' }
            };

            var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

            chart.draw(data, options);
        }
        </script>
          <div id="curve_chart" style="width: 1070px; height: 450px"></div>
        </div> 
    </div>

        <hr  style="clear: both; visibility: hidden;">
             
    <div class="row justify-content-center">
    <h3 class="col-md-9 text-left">Total de Pagamento dos Pacotes</h3><hr  style="clear: both; visibility: hidden;">
    <div class="col-md-5">
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Pacote', 'Quantidade'],
          <?php 
                $sq="select IdPagamento from paga_pacote where fk_IdPacote=2 order by IdPagamento";
                $qu=mysqli_query($con,$sq);
                $row=mysqli_num_rows($qu);
                
                echo"['Prime', $row],";
            ?>
             <?php 
                $sq="select IdPagamento from paga_pacote where fk_IdPacote=1 order by IdPagamento";
                $qu=mysqli_query($con,$sq);
                $row=mysqli_num_rows($qu);
                
                echo"['Standart', $row],";
            ?>
            <?php 
                $sq="select IdPagamento from paga_pacote where fk_IdPacote=3 order by IdPagamento";
                $qu=mysqli_query($con,$sq);
                $row=mysqli_num_rows($qu);
                
                echo"['Mega Ultra Premium', $row]";
            ?>
        ]);

        var options = {
          title: 'Gráfico dos Pacotes',
          is3D: true,
          backgroundColor: 'transparent'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
        chart.draw(data, options);
      }
    </script>
       <div id="piechart_3d" style="width: 700px; height: 230px;"></div>
    </div>

    <div class="col-md-5">
            <div class="card bg-success text-white" style="width: 32rem;">
                <div class="card-body">
                    <h5 class="card-title">
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-currency-dollar" viewBox="0 0 16 16">
                            <path d="M4 10.781c.148 1.667 1.513 2.85 3.591 3.003V15h1.043v-1.216c2.27-.179 3.678-1.438 3.678-3.3 0-1.59-.947-2.51-2.956-3.028l-.722-.187V3.467c1.122.11 1.879.714 2.07 1.616h1.47c-.166-1.6-1.54-2.748-3.54-2.875V1H7.591v1.233c-1.939.23-3.27 1.472-3.27 3.156 0 1.454.966 2.483 2.661 2.917l.61.162v4.031c-1.149-.17-1.94-.8-2.131-1.718H4zm3.391-3.836c-1.043-.263-1.6-.825-1.6-1.616 0-.944.704-1.641 1.8-1.828v3.495l-.2-.05zm1.591 1.872c1.287.323 1.852.859 1.852 1.769 0 1.097-.826 1.828-2.2 1.939V8.73l.348.086z"/>
                        </svg>
                        Total de Pagamento:
                    </h5><hr>
                    <center>
                        <?php 
                            $sq="SELECT IdPagamento FROM paga_pacote order by IdPagamento";
                            $qu=mysqli_query($con,$sq);
                            $row=mysqli_num_rows($qu);
                            
                            echo"<h1>$row</h1>";
                        ?>
                    </center>
                </div>
            </div>
        </div>

    </div>


    <?php include 'include/footer.php' ?>

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>
</html>