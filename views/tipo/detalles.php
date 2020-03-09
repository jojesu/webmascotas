<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Detalles del tipo de mascota <?=$tipo->nombre?></title>
		<link href="/css/sb-admin-2.min.css" rel="stylesheet">
    	<link href="/css/bootstrap.min.css" rel="stylesheet">
    	<link href="/css/heroic-features.css" rel="stylesheet">
    	<link href="/css/estilos.css" rel="stylesheet">
	</head>
	<body>
	
		<?php 
		  (TEMPLATE)::header("Detalles");
		  (TEMPLATE)::nav();
		?> 
		<h2>Detalles del tipo de mascota</h2>
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
                <a class="btn btn-primary" href="/tipo/edit/<?=$tipo->id?>">Editar tipo</a>
    			<a class="btn btn-danger" href="/tipo/delete/<?=$tipo->id?>">Borrar tipo</a>
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
