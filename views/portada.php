
    <!DOCTYPE html>
    <html>
    	<head>
    		<meta charset="UTF-8">
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
			<div class="container">
    		<?php 
    		  $ultimasFotos= Foto::getUltimas(12);
    		  foreach ($ultimasFotos as $foto)
    		   echo "<img class='' src='/$foto->fichero' alt='' width='275' height='200'>";
    		?>
    		
    		<!--<p class='mb-10'>Esta es una aplicación de prueba para comprender el MVC.</p>-->
    		</div> 
    		</div>  		
    		<?php 
    		  (TEMPLATE)::footer();
    		?>
    	</body>
    	
    </html>

