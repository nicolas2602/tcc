<br>
<center>
  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
    Adicionar
  </button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
        <div class="row">
              <div class="col">
                  <label for="inputEmail">Nome do Produto </label>
                  <input type="text" id="nome" class="form-control" name="prod" placeholder="Nome do Produto" required autofocus><br/>
              </div>
              
              <div class="col">
                  <label for="inputEmail">Preço</label>
                  <input type="number" id="data" class="form-control" name="price" placeholder="Preço" required autofocus><br/>
                  <a type="submit" class="btn btn-primary" name="add">Adicionar</a>
              </div>
        </div>
         
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <a type="submit" class="btn btn-primary" name="add">Adicionar</a>
      </div>
    </div>
  </div>
</div>

</center>
<hr>