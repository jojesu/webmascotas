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
		  (TEMPLATE)::header("Borrado de una Raza");
		  (TEMPLATE)::nav();
		?>  
		<div class="container">
        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
              <div class="col-lg-7">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Formulario de edición</h1>
                  </div>
                  <form class="user" method="post" action="/raza/destroy">
                  	<p>Confirmar el borrado de la raza <?=$raza->nombre?>.</p>
        			<input type="hidden" name="id" value="<?=$raza->id?>">
                    <div class="form-group">
                    	<input type="submit" name="borrar" value="Borrar" class="btn btn-primary btn-user btn-block">
                    	<hr>
                    	<a class="btn btn-primary mb-2" href="/raza/show/<?=$raza->id?>">Detalles</a> 
        				<a class="btn btn-primary mb-2" href="/raza/list">Volver al listado de mascotas</a>
                    </div>
                  </form>
                  <hr>
                </div>
              </div>
            </div>
          </div>
        </div> 
        
      </div>			
		
		
		<?php 
		  (TEMPLATE)::footer();
		?>
	</body>
	
</html>








