<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>Detalles del usuario <?=$usuario->usuario?></title>
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
	<br>	
	<h2 class="text-center">Detalles del usuario</h2>
			
	<div class="container">
	<div class="row text-center mr-2">
      <div class="col-lg-12 col-md-6 mb-4 text-center">
        <div class="card h-100">
          <div class="card-body">
            <h4 class="card-title"><?="$usuario->usuario ($usuario->email)"?></h4>
            <p class="card-text"><b>Nombre:</b> <?=$usuario->nombre?></p>
            <p class="card-text"><b>Apellidos:</b> <?="$usuario->apellido1 $usuario->apellido2"?></p>
            
          </div>
          <div class="card-footer">
            <a class="btn btn-primary" href="/usuario/edit/<?=$usuario->id?>">Editar usuario</a>
			<a class="btn btn-danger" href="/usuario/delete/<?=$usuario->id?>">Borrar usuario</a>
          </div>
        </div>
      </div>
    </div>
    </div>
    <div class="container">
    <h1 class="text-center">Tus mascotas</h1>
    <div class="row text-center">
    <?php 
        foreach ($mascotas as $mascota)
            echo "
             <div class='col-lg-3 col-md-6 mb-4'>
                <div class='card h-100'>
                    <img class='card-img-top' src='' alt=''>
                    <div class='card-body'>
                    <h4 class='card-title'>NOMBRE: $mascota->nombre</h4>
                    <p class='card-text'>BIOGRAFÍA: $mascota->biografia</p>
                    <p class='card-text'>Fecha Nacimiento: $mascota->fechanacimiento</p>
                    <p class='card-text'>Fecha Fallecimiento: $mascota->fechafallecimiento</p>                 
                    </div>
                    <div class='card-footer'>
                    <a href='/mascota/show/$mascota->id' class='btn btn-secondary mb-1'>Ver Mascota</a>
                    <a href='/mascota/edit/$mascota->id' class='btn btn-primary mb-1'>Editar Mascota</a>
                    <a href='/mascota/delete/$mascota->id' class='btn btn-warning'>Borrar Mascota</a>
                    </div>
                </div>
            </div>";
    ?>
	</div>
	</div>
	<br><br>
		<?php 
		  (TEMPLATE)::footer();
		?>
	</body>
</html>