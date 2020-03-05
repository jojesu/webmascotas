<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Detalles de la mascota <?=$mascota->nombre?></title>
		<link href="/css/sb-admin-2.min.css" rel="stylesheet">
		<link href="/css/bootstrap.min.css" rel="stylesheet">
    	<link href="/css/heroic-features.css" rel="stylesheet">
	</head>
	<body>
	
		<?php 
		  (TEMPLATE)::header("Detalles");
		  (TEMPLATE)::nav();
		  (TEMPLATE)::login();
		?>  
		
		<h2>Detalles de la mascota</h2>
<<<<<<< HEAD
		<h3><?="$mascota->nombre"?></h3>
		<?php		
		$fotos=Foto::getFotosMascota($mascota->id);
		
		foreach ($fotos as $foto)
		    echo "<div>
                    <img src=/img/mascotas/'$foto->fichero' alt='$mascota->nombre'>
                  </div>";
		?>		
		<p><b>Nombre:</b> <?=$mascota->nombre?></p>
		<p><b>Sexo:</b> <?=$mascota->sexo?></p>
		<p><b>Biografía:</b> <?=$mascota->biografia?></p>
		<p><b>Fecha nacimiento:</b> <?=$mascota->fechanacimiento?></p>
		<p><b>Fecha fallecimiento:</b> <?=$mascota->fechafallecimiento?></p>	
=======
>>>>>>> branch 'master' of https://github.com/jojesu/webmascotas
	
		<div class="container">
        	<div class="row text-center mr-2">
              <div class="col-lg-12 col-md-5 mb-2">
                <div class="card h-100">
                  <img class="card-img-top" src="http://placehold.it/500x325" alt="">
                  <div class="card-body">
                    <h4 class="card-title"><?="$mascota->nombre"?></h4>
                    <p class="card-text"><b>Nombre:</b> <?=$mascota->nombre?></p>
                    <p class="card-text"><b>Sexo:</b> <?="$mascota->sexo"?></p>
                    <p class="card-text"><b>Biografía:</b> <?=$mascota->biografia?></p>
                    <p class="card-text"><b>Fecha Nacimiento:</b> <?="$mascota->fechanacimiento"?></p>
                    <p class="card-text"><b>Fecha Fallecimiento:</b> <?=$mascota->fechafallecimiento?></p>
                  </div>
                  <div class="card-footer">
                    <a class="btn btn-primary" href="/mascota/edit/<?=$usuario->id?>">Editar mascota</a>
        			<a class="btn btn-warning" href="/mascota/delete/<?=$usuario->id?>">Borrar mascota</a> 			
        			<a class="btn btn-danger" href="/foto/list">Lista de mascotas</a>
                  </div>
                </div>
                <form action="foto/store">
                	<input type="hidden" value="<?=$mascota->id?>" name="idmascota">
                	<label>Ubicación</label>
                	<input type="text" name="ubicacion">
                	<label>Introduzca la imagen de la mascota</label>
                	<input type="file" name="fichero">
                </form>
              </div>
            </div>
        </div>
	
		<?php 
		  (TEMPLATE)::footer();
		?>
	</body>
</html>
