<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Borrar tipo de mascota</title>
		<link href="/css/sb-admin-2.min.css" rel="stylesheet">
    	<link href="/css/bootstrap.min.css" rel="stylesheet">
    	<link href="/css/heroic-features.css" rel="stylesheet">
    	<link href="/css/estilos.css" rel="stylesheet">
	</head>	
	<body>
		<?php 
		  (TEMPLATE)::header("Borrar tipo de mascota");
		  (TEMPLATE)::nav();
		?> 
		<h2 class='text-center'>Confirmar el borrado del tipo de mascota <?=$tipo->nombre?></h2>
		<div class="container">
    	<div class="row text-center mr-2">
          <div class="col-lg-12 col-md-6 mb-4 text-center">
            <div class="card h-100">
              <div class="card-body">
                <h4 class="card-title"><?="$tipo->nombre"?></h4>
                <p class="card-text"><b>Nombre:</b> <?=$tipo->nombre?></p>
                <p class="card-text"><b>Descripción:</b> <?="$tipo->descripcion"?></p>           
              </div>
              <div class="card-footer">
				<form method="post" action="/tipo/destroy/<?=$id?>">
				<p>Confirmar el borrado del tipo de mascota .</p>
				<input type="hidden" name="id" value="<?=$id?>">
				<input class="btn btn-danger" type="submit" name="borrar" value="Borrar">
				</form>    			
              </div>
            </div>
          </div>
        </div>
        </div>
		<a class='text-center' href="/tipo/list"><h3>Volver al listado de tipos de mascotas</h3></a>
		
		<?php 
		  (TEMPLATE)::footer();
		?>
	</body>	
</html>