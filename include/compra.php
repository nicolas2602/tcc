<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header bg-success">
        <h5 class="modal-title" id="exampleModalLongTitle">Pagamento</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

<center><div class="logo"><img src="logo1.png" alt="logo"></div></center>


<p><div class="form-group">
   <div class="form-group">
   <div class="col">
    <label class="text-left"><b style="color:black">Endereço:</b></label>
    <input type="text" name="endereco" class="form-control col-sm-9" placeholder="Insira o endereço" required autofocus>
    </div>
  </div>

  <div class="form-group">
  <label for="pagamento" class="text-left"><b style="color:black">Pacote Selecionado:</b></label>
  <select class="form-control col-sm-8" id="pagamento" name="pacote" required="Selecione o pacote">
     <option value="">...</option>
     <option value="Standart">Standart</option>
     <option value="Prime">Prime</option>
     <option value="MEGA ULTRA PREMIUM DELUX">MEGA ULTRA PREMIUM DELUX</option>
  </select><br/>
  </div>  

  <div class="form-group">
  <label for="pagamento" class="text-left"><b style="color:black">Formas de Pagamento:</b></label>
  <select class="form-control col-sm-8" id="pagamento" name="pagamento" required>
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
  <div class="modal-footer">
   <center>
   <button type="submit" class="btn btn-danger" style="color:white; align: left;" name="pag">Comprar</button>
   </center>
  </div>
      </div>
    </div>
  </div>