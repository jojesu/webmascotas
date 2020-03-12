<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>Registro de tipos de mascotas</title>
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
		  (TEMPLATE)::header("Registro de tipos de mascotas");
		  (TEMPLATE)::nav();
		?>  
		
		<h2 class='text-center'>Nuevo Tipo de Mascota</h2>
		<div class="container">
        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-5 d-none d-lg-block bg-tiponew-image"></div>
              <div class="col-lg-7">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Crea un nuevo tipo de Mascota</h1>
                  </div>
                  <form class="user" method="post" action="/tipo/store">
                    <div class="form-group row">
                      <div class="col-sm-6 mb-3">
                        <input type="text" class="form-control form-control-user" name="nombre" placeholder="Tipo de mascota">
                      </div>
                      <div class="col-sm-6 mb-3">
                        <input type="text" class="form-control form-control-user" name="descripcion" placeholder="Descripcion">
                      </div>
                    	<input type="submit" name="guardar" value="Guardar" class="btn btn-primary btn-user btn-block">
                    <hr>
                    </div>
                  	</form>
                  
                  <hr>
                  <a href="/tipo/list" class='text-center'>Volver al listado de tipos de mascotas</a>
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