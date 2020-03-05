
    <!DOCTYPE html>
    <html>
    	<head>
    		<meta charset="UTF-8">
    		<title>Portada</title>
    		<link href="/css/sb-admin-2.min.css" rel="stylesheet">
    		<link href="/css/bootstrap.min.css" rel="stylesheet">
    		<link href="/css/heroic-features.css" rel="stylesheet">
    	</head>
    	
    	<body>
    		<?php 
    		  (TEMPLATE)::header("Portada");
    		  (TEMPLATE)::nav();
    		?>  
    		
    		<h2>Bienvenido a nuestra app de mascotas</h2>
    		<?php 
    		  echo Login::get()? 
    		          "<p>Identificado como ".Login::get()->usuario."</p>":
    		          "<p>No estás identificado</p>";
    		  
    		  echo Login::isAdmin()?
        		  "<p>Eres administrador todopoderoso</p>":
        		  "<p>No eres admin</p>";
    		  
    		  echo Login::hasPrivilege(500)?
        		  "<p>Tienes nivel de privilegio 500 o sea, eres supervisor</p>":
        		  "<p>Tienes menos de 500 de nivel de privilegio</p>";
    		
    		?>
    		<p>Esta es una aplicación de prueba para comprender el MVC.</p>
    		
    		<?php 
    		  (TEMPLATE)::footer();
    		?>
    	</body>
    	
    </html>

