<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Actualizar datos del usuario <?=$usuario->usuario?></title>
		<link href="/css/sb-admin-2.min.css" rel="stylesheet">
		<style>
		  form label{
		      display: inline-block;
		      min-width: 100px;
		      padding: 5px;
		  }
		</style>
	</head>
	<body>
		<?php 
		  (TEMPLATE)::header("Actualizar las razas y tipos de mascotas");
		  (TEMPLATE)::nav();
		?>
		<?=empty( $GLOBALS['mensaje'])? "" : "<p>". $GLOBALS['mensaje']."</p>"?>
	<div class="container text-center">
        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-5 d-none d-lg-block bg-actualizar-image"></div>
              <div class="col-lg-7">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Formulario de edición de Razas</h1>
                  </div>
                  <form class="user" method="post" action="/raza/update">
                  <!-- id del usuario a modificar -->
					<input type="hidden" name="id" value="<?=$raza->id?>">
                    <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <input type="text" name="nombre" value="<?=$raza->nombre?>" class="form-control form-control-user" id="exampleFirstName">
                      </div>
                      <div class="col-sm-6 mb-3 mb-sm-0">
                        <input type="text" name="descripcion" value="<?=$usuario->descripcion?>" class="form-control form-control-user" id="exampleFirstName">
                      </div>
                    <input type="submit" name="actualizar" value="Actualizar" class="btn btn-primary btn-user btn-block">
                    <hr>
                    
                  </form>
                  <hr>
                </div>
              </div>
            </div>
          </div>
        </div>  
      </div>
      <div class="container">
        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-5 d-none d-lg-block bg-actualizar-image"></div>
              <div class="col-lg-7">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Formulario de edición de Tipos</h1>
                  </div>
                  <form class="user" method="post" action="/tipo/update">
                  <!-- id del usuario a modificar -->
					<input type="hidden" name="id" value="<?=$tipo->id?>">
                    <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <input type="text" name="nombre" value="<?=$tipo->nombre?>" class="form-control form-control-user" id="exampleFirstName">
                      </div>
                      <div class="col-sm-6 mb-3 mb-sm-0">
                        <input type="text" name="descripcion" value="<?=$tipo->descripcion?>" class="form-control form-control-user" id="exampleFirstName">
                      </div>
                    <input type="submit" name="actualizar" value="Actualizar" class="btn btn-primary btn-user btn-block">
                    <hr>
                    
                  </form>
                  <hr>
                </div>
              </div>
            </div>
          </div>
        </div>  
      </div>				
		
		
		<?=empty( $GLOBALS['mensaje'])? "" : "<p>". $GLOBALS['mensaje']."</p>"?>

		<form method="post" action="/usuario/update">
		
		    <!-- id del usuario a modificar -->
			<input type="hidden" name="id" value="<?=$usuario->id?>">
			
			<!-- resto del formulario... -->
			<label>Usuario</label>
			<input type="text" name="usuario" value="<?=$usuario->usuario?>">
			<br>
			<label>Clave</label>
			<input type="password" name="clave">
			<label>En blanco para no cambiar la clave actual</label>
			<br>
			
			<label>Nombre</label>
			<input type="text" name="nombre" value="<?=$usuario->nombre?>">
			<br>
			<label>Primer apellido</label>
			<input type="text" name="apellido1" value="<?=$usuario->apellido1?>">
			<br>
			<label>Segundo apellido</label>
			<input type="text" name="apellido2" value="<?=$usuario->apellido2?>">
			<br>
			<label>Email</label>
			<input type="email" name="email" value="<?=$usuario->email?>">
			<br>
						
			<h4>Operaciones solo para el admin</h4>
			<label>Privilegio</label>
			<input type="number" min="0" max="9999" name="privilegio" 
				   value="<?=$usuario->privilegio?>">
			<br>
			<input type="checkbox" name="administrador" value="1"
				   <?=empty($usuario->administrador)? '' : ' checked'?>>
			<label>Conceder privilegio de administrador</label>
			<br>
			
			<input type="submit" name="actualizar" value="Actualizar">
		</form>
		<br>
		
		<a href="/usuario/show/<?=$usuario->id?>">Detalles</a> - 
		<a href="/usuario/list">Volver al listado de usuarios</a>
		
		<?php 
		  (TEMPLATE)::footer();
		?>
		
	</body>
</html>








