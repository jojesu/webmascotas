
    <!DOCTYPE html>
    <html>
    	<head>
    		<meta charset="UTF-8">
    		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    		<title>Portada</title>
    		<link href="/css/sb-admin-2.min.css" rel="stylesheet">
        	<link href="/css/bootstrap.min.css" rel="stylesheet">
        	<link href="/css/heroic-features.css" rel="stylesheet">
        	<link href="/css/estilos.css" rel="stylesheet">
    	</head>
    	
    	<body>
    		<?php 
    		  (TEMPLATE)::header("Portada");
    		  (TEMPLATE)::nav();
    		?> 
    		<div class="container">   		
    		<h2 style="margin:1em 0em;">Bienvenido a nuestra app de mascotas</h2>
    		<!--<div class="alert alert-dismissible alert-success">
  				<button type="button" class="close" data-dismiss="alert">&times;</button>
  				<strong>
  					<?php 
    		          echo Login::get()? 
    		          "<p>Identificado como ".Login::get()->usuario."</p>":
    		          "<p>No estás identificado</p>";
    		          ?>
    		   </strong>
    		  <?php  
    		  echo Login::isAdmin()?
        		  "<p>Eres administrador todopoderoso</p>":
        		  "<p>No eres admin</p>";
    		  ?> <a href="<?="/usuario/show/".Login::get()->id?>" class="alert-link">
    		  <?php     		  
    		  echo Login::hasPrivilege(500)?
        		  "<p>Aqui puedes ver tu perfil</p>":
        		  "<p>Podrias ver tu perfil pero no estas logeado</p>";  		
    		 ?></a>.
			</div>-->	
			<div class="text-center">	
    		<?php
    		
    		  $ultimasFotos= Foto::getUltimas(12);
    		  foreach ($ultimasFotos as $foto)
    		   echo "<img style='padding:0.3em; border-radius:20px;' src='/$foto->fichero' alt='' width='275' height='200'>";
    		?>
    		</div>
    		<br><br><br><br><br><br>		   		 
    		</div> 
    		<?php 
    		  (TEMPLATE)::footer();
    		?> 
    		 		
    	</body>   	
    </html>

