<nav class="navbar navbar-expand-md navbar-dark bg-dark mb-4">
    	<a class="navbar-brand" href="#"><img alt="menu" src="imagens/menu_icon.png" width="50px"></a>
    	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
    		<span class="navbar-toggler-icon"></span>
    	</button>

    	<div class="collapse navbar-collapse" id="navbarCollapse">
    		<ul class="navbar-nav mr-auto">
    			<li class="nav-item active">
    				<a href="Principal.php" class="nav-link btn btn-dark">Inicio<span class="sr-only">(atual)</span></a>
    			</li>
    			<li class="nav-item">

					<?php include 'include/modal.php'; ?>
	
				</li>
				
                <li class="nav-item">
    				<a href="users.php" class="nav-link btn btn-dark"><img alt="login" src="Imagens/perfil_icon.png" width="30px"></a>
    	        </li>
				<li class="nav-item">
    				<a href="pacote.php" class="nav-link btn btn-dark">
						<svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-bag" viewBox="0 0 16 16">
							<path d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V5z"/>
						</svg>
					</a>
    	        </li>
                <li class="nav-item">
    				<a href="pdf/quem_somos.pdf" class="nav-link btn btn-dark"><img alt="info" src="Imagens/info_icon.png" width="30px"></a>
    	       </li>

    	    </ul>


    		<form class="form-inline mt-02 mt-md-0">
    			<input type="text" class="form-control mr-sm-2" placeholder="Pesquisar" aria-label="Pesquisar">
    			<button type="submit" class="btn btn-dark"><img alt="pesquisa" src="Imagens/src_icon.png" width="40px"></button>
    		</form>
    	</div>



</nav>
