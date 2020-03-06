<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Detalles del usuario <?=$usuario->usuario?></title>
		<link href="/css/sb-admin-2.min.css" rel="stylesheet">
    	<link href="/css/bootstrap.min.css" rel="stylesheet">
    	<link href="/css/heroic-features.css" rel="stylesheet">
    	<link href="/css/estilos.css" rel="stylesheet">
	</head>
	<body>
	
		<?php 
		  (TEMPLATE)::header("Detalles de la Raza");
		  (TEMPLATE)::nav();
		?>  
	<br>
	<div class="container">
	<div class="row text-center mr-2">
      <div class="col-lg-12 col-md-6 mb-4 text-center">
        <div class="card h-100">
          <div class="card-body">
            <h4 class="card-title"><?="$raza->nombre"?></h4>
            <p class="card-text"><b>Nombre:</b> <?=$raza->nombre?></p>
            <p class="card-text"><b>Descripción:</b> <?="$raza->descripcion"?></p>           
          </div>
          <div class="card-footer">
            <a class="btn btn-primary" href="/raza/edit/<?=$raza->id?>">Editar raza</a>
			<a class="btn btn-danger" href="/raza/delete/<?=$raza->id?>">Borrar raza</a>
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