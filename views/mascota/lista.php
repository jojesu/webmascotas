<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Lista de mascotas</title>
		<link href="/css/sb-admin-2.min.css" rel="stylesheet">
    	<link href="/css/bootstrap.min.css" rel="stylesheet">
    	<link href="/css/heroic-features.css" rel="stylesheet">
    	<link href="/css/estilos.css" rel="stylesheet">
	</head>
	<body>
		<?php 
		  (TEMPLATE)::header("Lista de mascotas");
		  (TEMPLATE)::nav();
		?>  
		<h2>Lista de mascotas</h2>
			
		<table class="table">
			<tr>
				<th>Nombre</th>
				<th>Sexo</th>
				<th>Biografía</th>
				<th>Nacimiento</th>
				<th>Fallecimiento</th>
			</tr>
    		<?php 
    		       foreach($mascotas as $mascota){
    			   echo "<tr>";
    			    
    			   echo "<td>$mascota->nombre</td>";
    			   echo "<td>$mascota->sexo</td>";
    			   echo "<td>$mascota->biografia</td>";
    			   echo "<td>$mascota->fechanacimiento</td>";
    			   echo "<td>$mascota->fechafallecimiento</td>";
    			  
    			   echo "<td>";
    			   echo " <a href='/mascota/show/$mascota->id'>Ver</a>";
    			   
    			   if(Login::get() && Login::get()->id==$mascota->idusuario || Login::hasPrivilege(500)){
    			     echo "<td><a href='/mascota/edit/$mascota->id'>EDITAR</a></td>
                     <td><a href='/mascota/delete/$mascota->id'>BORRAR</a></td>";}
    			   echo "</td>";
    			   echo "</tr>";
    		}?>
		</table>
		<br>
		<?php 
		  (TEMPLATE)::footer();
		?>
	</body>
</html>
