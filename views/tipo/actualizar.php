<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Actualizar datos del usuario <?=$usuario->usuario?></title>
		<link href="/css/sb-admin-2.min.css" rel="stylesheet">
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
		  (TEMPLATE)::header("Actualizar las razas y tipos de mascotas");
		  (TEMPLATE)::nav();
		?>
		<?=empty( $GLOBALS['mensaje'])? "" : "<p>". $GLOBALS['mensaje']."</p>"?>
      <div class="container">
        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-5 d-none d-lg-block bg-actualizar-image"></div>
              <div class="col-lg-7">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Formulario de edición de Tipos</h1>
                  </div>
                  <form class="user" method="post" action="/tipo/update">
                  <!-- id del usuario a modificar -->
					<input type="hidden" name="id" value="<?=$tipo->id?>">
                    <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <input type="text" name="nombre" value="<?=$tipo->nombre?>" class="form-control form-control-user" id="exampleFirstName">
                      </div>
                      <div class="col-sm-6 mb-3 mb-sm-0">
                        <input type="text" name="descripcion" value="<?=$tipo->descripcion?>" class="form-control form-control-user" id="exampleFirstName">
                      </div>
                      </div>
                    <input type="submit" name="update" value="Actualizar" class="btn btn-primary btn-user btn-block">
                    <hr>
                    
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








