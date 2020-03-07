<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Detalles de la mascota <?=$mascota->nombre?></title>
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
		<h2 class="text-center">Detalles de la mascota</h2>
		<div class="container">
        	<div class="row">
              <div class="col-lg-12 col-md-5 mb-2">
                
                    <div class="row">
    				<?php 
    				    foreach ($fotos as $foto)
    				        echo "<img class='' src='/$foto->fichero' alt='' width='275' height='200'>";
    				?>                
                   </div> 
                  <div class="card-body">
                    <h4 class="card-title"><?="$mascota->nombre"?></h4>
                    <p class="card-text"><b>Nombre:</b> <?=$mascota->nombre?></p>
                    <p class="card-text"><b>Sexo:</b> <?="$mascota->sexo"?></p>
                    <p class="card-text"><b>Biografía:</b> <?=$mascota->biografia?></p>
                    <p class="card-text"><b>Fecha Nacimiento:</b> <?="$mascota->fechanacimiento"?></p>
                    <p class="card-text"><b>Fecha Fallecimiento:</b> <?=$mascota->fechafallecimiento?></p>
                  </div>
                  <div class="card-footer">
					 <?php 
					 if(Login::get() && Login::get()->id==$mascota->idusuario || Login::hasPrivilege(500)){
    			     echo "<td><a href='/mascota/edit/$mascota->id'><button class='btn btn-primary p-2 ml-2' >EDITAR</button></a></td>
                     <td><a href='/mascota/delete/$mascota->id'><button class='btn btn-danger p-2 ml-2' >BORRAR</button></a></td>";}  ?>                
                  </div>
              </div>
              
            </div>
        </div>
	
		<?php 
		  (TEMPLATE)::footer();
		?>
	</body>
</html>
