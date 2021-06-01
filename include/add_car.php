<Style>
  hr {
    clear: both;
    visibility: hidden;
  }
</Style>

<?php
  if($_SESSION['profile']=='Admin'){
      echo("
<hr>
<center>
  <button type='button' class='btn btn-success col-md-3' data-toggle='modal' data-target='#exampleModal'>
    <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-tag' viewBox='0 0 16 16'>
      <path d='M6 4.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm-1 0a.5.5 0 1 0-1 0 .5.5 0 0 0 1 0z'/>
      <path d='M2 1h4.586a1 1 0 0 1 .707.293l7 7a1 1 0 0 1 0 1.414l-4.586 4.586a1 1 0 0 1-1.414 0l-7-7A1 1 0 0 1 1 6.586V2a1 1 0 0 1 1-1zm0 5.586 7 7L13.586 9l-7-7H2v4.586z'/>
    </svg>
    Anunciar
  </button>
</center>


<div class='modal fade' id='exampleModal' tabindex='-1' aria-labelledby='exampleModalLabel' aria-hidden='true'>
  <div class='modal-dialog'>
    <div class='modal-content'>
      <div class='modal-header'>
        <h5 class='modal-title' id='exampleModalLabel'>Adicionar o Produto</h5>
        <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
          <span aria-hidden='true'>&times;</span>
        </button>
      </div>
      <div class='modal-body'>
        
       <img class='img-thumbnail mx-auto d-block border border-secondary rounded-0' id='previewImg' width='211px' height='211px'
            src='<?php echo $produto[foto_produto]; ?>'>
 
        <center>
            <div class='file btn btn-secondary btn-square' style='position: relative; overflow: hidden; border-radius: 0;'>
                <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-images' viewBox='0 0 16 16'>
                    <path d='M4.502 9a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z'/>
                    <path d='M14.002 13a2 2 0 0 1-2 2h-10a2 2 0 0 1-2-2V5A2 2 0 0 1 2 3a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2v8a2 2 0 0 1-1.998 2zM14 2H4a1 1 0 0 0-1 1h9.002a2 2 0 0 1 2 2v7A1 1 0 0 0 15 11V3a1 1 0 0 0-1-1zM2.002 4a1 1 0 0 0-1 1v8l2.646-2.354a.5.5 0 0 1 .63-.062l2.66 1.773 3.71-3.71a.5.5 0 0 1 .577-.094l1.777 1.947V5a1 1 0 0 0-1-1h-10z'/>
                </svg>
                Selecione uma imagem
                <input type='file' name='f1' id='file' onchange='previewFile(this);' 
                style='border-radius: 0; position: absolute; font-size: 50px; opacity: 0; right: 0; top: 0;'>
            </div>
        </center>
        <input type='hidden' name='img1' value='<?php echo $produto[foto_produto]; ?>' id='upload'><br/>

        <div class='row'>
              <div class='col'>
                  <label for='inputEmail'>Nome do Produto </label>
                  <input type='text' id='nome' class='form-control' name='prod' placeholder='Nome do Produto' required autofocus><br/>
              </div>
              
              <div class='col'>
                  <label for='inputEmail'>Preço</label>
                  <input type='number' id='data' class='form-control' name='price' placeholder='Preço' required autofocus><br/>
              </div>
        </div>
         
      </div>
      <div class='modal-footer'>
        <button type='button' class='btn btn-danger' data-dismiss='modal'>Fechar</button>
        <input type='submit' class='btn btn-primary' value='Publicar' name='add'/>
      </div>
    </div>
  </div>
</div>

</center>
<hr>

");
}
?>

