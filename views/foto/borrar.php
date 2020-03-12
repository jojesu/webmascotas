<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>Baja de usuario</title>
		<link href="/css/sb-admin-2.min.css" rel="stylesheet">
    	<link href="/css/bootstrap.min.css" rel="stylesheet">
    	<link href="/css/heroic-features.css" rel="stylesheet">
    	<link href="/css/estilos.css" rel="stylesheet">
	</head>
	
	<body>
		<?php 
		  (TEMPLATE)::header("Borrar una foto");
		  (TEMPLATE)::nav();
		  
		 
		?>  
		<div class="container">
        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
              <div class="col-lg-7">
                <div class="p-5 text-center">
                  <form class="user" method="post" action="/foto/destroy">
                  	<h4 class='text-center'>Confirmar el borrado de la foto <?=$foto->id?>.</h4>
                      	<img class='imagendetalle text-center' src='/<?=$foto->fichero?>' alt=''>
            			<input type="hidden" name="id" value="<?=$foto->id?>">
            			<input type="hidden" name="idmascota" value="<?=$foto->idmascota?>">
            			<input type='hidden' name='fichero' value='<?=$foto->fichero?>'>
                        <div class="form-group">
                    	<br>
                    	<input type="submit" name="borrar" value="Borrar" class="btn btn-primary btn-user btn-block">
                    	<hr> 
        				<a class="btn btn-primary" href="/foto/list/">Ir al listado de fotos</a>
                    </div>
                  </form>
                  <hr>
                </div>
              </div>
            </div>
          </div>
        </div> 
        
      </div>				
		<br>
		<?php 
		  (TEMPLATE)::footer();
		?>
	</body>
	
</html>








