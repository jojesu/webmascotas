<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Detalles del usuario <?=$usuario->usuario?></title>
		<link href="/css/sb-admin-2.min.css" rel="stylesheet">
	</head>
	<body>
	
		<?php 
		  (TEMPLATE)::header("Detalles");
		  (TEMPLATE)::nav();
		  (TEMPLATE)::login();
		?>  
		
		<h2>Detalles del usuario</h2>
		<h3><?="$usuario->usuario ($usuario->email)"?></h3>
		
		<p><b>Usuario:</b> <?=$usuario->usuario?></p>
		<p><b>Nombre:</b> <?=$usuario->nombre?></p>
		<p><b>Apellidos:</b> <?="$usuario->apellido1 $usuario->apellido2"?></p>
		<p><b>Privilegio:</b> <?=$usuario->privilegio?></p>
		<p><?=$usuario->administrador? "Administrador":"No administrador"?></p>
		<p><b>Email:</b> <?=$usuario->email?></p>
	
	
		<a class="btn btn-primary" href="/usuario/edit/<?=$usuario->id?>">Editar usuario</a> - 
		<a class="btn btn-warning" href="/usuario/delete/<?=$usuario->id?>">Borrar usuario</a> - 
		<a class="btn btn-danger" href="/usuario/list">Lista de usuarios</a>
		
	<div class="container">
	<div class="row text-center mr-2">
      <div class="col-lg-12 col-md-5 mb-2">
        <div class="card h-100">
          <img class="card-img-top" src="http://placehold.it/500x325" alt="">
          <div class="card-body">
            <h4 class="card-title"><?="$usuario->usuario ($usuario->email)"?></h4>
            <p class="card-text"><b>Nombre:</b> <?=$usuario->nombre?></p>
            <p class="card-text"><b>Apellidos:</b> <?="$usuario->apellido1 $usuario->apellido2"?></p>
            <p class="card-text"><b>Nombre:</b> <?=$usuario->nombre?></p>
            
          </div>
          <div class="card-footer">
            <a class="btn btn-primary" href="/usuario/edit/<?=$usuario->id?>">Editar usuario</a>
			<a class="btn btn-danger" href="/usuario/delete/<?=$usuario->id?>">Borrar usuario</a>
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