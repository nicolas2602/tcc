<form method="post" enctype="multipart/form-data">
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header bg-success">
        <h5 class="modal-title text-white" id="exampleModalLongTitle">
          <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" fill="currentColor" class="bi bi-cash" viewBox="0 0 16 16">
            <path d="M8 10a2 2 0 1 0 0-4 2 2 0 0 0 0 4z"/>
            <path d="M0 4a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1V4zm3 0a2 2 0 0 1-2 2v4a2 2 0 0 1 2 2h10a2 2 0 0 1 2-2V6a2 2 0 0 1-2-2H3z"/>
          </svg>
          Pagamento
        </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

<center><div class="logo"><img src="Imagens/logo1.png" style="width: 170px; height: 120px;"alt="logo"></div></center>


<p>
    <center>
      <div class="form-group">
        <label for="pagamento" class="text-left"><b style="color:black">Selecione o pacote:</b></label>
        <select class="form-control col-sm-8" id="pagamento" name="pacote" required="Selecione o pacote">
          <option value="">...</option>
          <?php
              $sql= mysqli_query($con, "select * from pacote");
              while($item = mysqli_fetch_assoc($sql))
              {
                  $IdPacote = $item['IdPacote'];
                  $pacote = $item['nomePacote'];
                  echo "<option value=$IdPacote>$pacote</option>";
              }
              ?>
        </select>
      </div>  
    </center>
    
    <div class="row">
        <div class="col">
          <div class="form-group">
              <label class="text-left"><b style="color:black">Confira endereço correto:</b></label>
              <input type="text" name="endereCo" class="form-control " placeholder="Insira o endereço" required autofocus>
            </div>
          </div>

        <div class="col"> 
          <div class="form-group">  
              <label class="text-left"><b style="color:black">CEP:</b></label>
              <input type="text" name="CEP" class="form-control" placeholder="Insira o CEP" required autofocus>
            </div>
          </div>
    </div>
    
    <div class="row">
        <div class="col">
          <label for="pagamento" class="text-left"><b style="color:black">Formas de Pagamento:</b></label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="pagamento" id="pagamento" value="Boleto" required>
                <label class="form-check-label" for="pagamento">
                  Boleto
                </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="pagamento" id="pagamento" value="Cartão de Crédito">
              <label class="form-check-label" for="pagamento">
                Cartão de Crédito
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="pagamento" id="pagamento" value="Pix">
              <label class="form-check-label" for="pagamento">
                Pix
              </label>
            </div>
        </div>
      </div><hr>

    <center>
    <div class="form-check">
      <input type="checkbox" class="form-check-input" id="dropdownCheck" required>
      <label class="form-check-label" for="dropdownCheck">
        Concordo que li e aceito os termos do serviço e diretrizes
      </label>
    </div>
    </center>

  <br>

      <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">
            Fechar
          </button>
          <button type="submit" class="btn btn-success" style="color:white; align: left;" name="pag">
            Finalizar
          </button>
      </div>

      </div>
    </div>
  </div>
</form>