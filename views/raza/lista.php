<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Lista de usuarios</title>
	</head>
	<body>
		<?php 
		  (TEMPLATE)::header("RAZAS");
		  (TEMPLATE)::nav();
		  (TEMPLATE)::login();
		?>  
		<h2>Lista de razas</h2>
			
		<table border="1">
			<tr>
				<th>RAZA</th>
				<th>DESCRIPCIÓN</th>
				<th>Operaciones</th>
			</tr>
    		<?php foreach($razas as $raza){
    			   echo "<tr>";
    			   echo "<td>$raza->nombre</td>";
    			   echo "<td>$raza->descripcion</td>";
    			   echo "<td>";
    			   echo " <a href='/raza/show/$raza->id'>Ver</a>";
    			   echo "-<a href='/raza/edit/$raza->id'>Actualizar</a>";
    			   echo "-<a href='/raza/delete/$raza->id'>Borrar</a>";
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

