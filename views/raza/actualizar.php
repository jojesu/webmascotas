 <!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Actualizar la raza <?=$raza->nombre?></title>
		<link href="/css/sb-admin-2.min.css" rel="stylesheet">
    	<link href="/css/bootstrap.min.css" rel="stylesheet">
    	<link href="/css/heroic-features.css" rel="stylesheet">
    	<link href="/css/estilos.css" rel="stylesheet">
		<style>
		  form label{
		      display: inline-block;
		      min-width: 100px;
		      padding: 5px;
		  }
		</style>
	</head>
	<body>
		<?php 
		  (TEMPLATE)::header("Actualizar la raza");
		  (TEMPLATE)::nav();
		?>  
				
		<h2>Formulario de edición</h2>
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
                  <form class="user" method="post" action="/raza/update">
                  <!-- id de la mascota a modificar -->
                  	<input type="hidden" name="id" value="<?=$raza->id?>">
					<input type="hidden" name="idtipo" value="<?=$raza->idtipo?>">
        			
                    <div class="form-group">
                        <div class="form-group">
                            <input type="text" name="nombre" value="<?=$raza->nombre?>" class="form-control form-control-user" id="exampleFirstName" placeholder="Nombre">
                        </div>
                        
                        <div class="form-group">
                          <input type="text" class="form-control form-control-user" value="<?=$raza->descripcion?>" name="descripcion" id="exampleInputEmail" placeholder="Descripción">
                        </div>
                        
                    	<input type="submit" name="actualizar" value="Actualizar" class="btn btn-primary btn-user btn-block">
                    	<hr>
                    	<a class="btn btn-primary" href="/raza/show/<?=$raza->id?>">Detalles</a> 
        				<a class="btn btn-primary" href="/raza/list">Volver al listado de razas</a>
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








