<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>Login</title>
		<link href="/css/sb-admin-2.min.css" rel="stylesheet">
    	<link href="/css/bootstrap.min.css" rel="stylesheet">
    	<link href="/css/heroic-features.css" rel="stylesheet">
    	<link href="/css/estilos.css" rel="stylesheet">
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
		  (TEMPLATE)::header("Identificación");
		  (TEMPLATE)::nav();		  
		?>  
    <!-- Outer Row -->
    <div class="row justify-content-center">
      <div class="col-xl-10 col-lg-12 col-md-9">
        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
              <div class="col-lg-6">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">¡¡Bienvenido de nuevo!!</h1>
                  </div>
                  <form class="user" method="post" action="/login/login">
                    <div class="form-group">
                      <input type="text" name="usuario" required class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Usuario o Email">
                    </div>
                    <div class="form-group">
                      <input type="password" name="clave" required class="form-control form-control-user" id="exampleInputPassword" placeholder="Password">
                    </div>
                    <div class="form-group">
                      <div class="custom-control custom-checkbox small">
                        <input type="checkbox" class="custom-control-input" id="customCheck">
                        <label class="custom-control-label" for="customCheck">Recuerdame</label>
                      </div>
                    </div>
                    <input type="submit" name="identificar" value="Identificarse" class="btn btn-primary btn-user btn-block">
                    <hr>
                  </form>
                  <hr>
                  <div class="text-center">
                    <a href="/forgotpassword" class="small" href="forgot-password.html">¿Olvidaste tu clave?</a>
                  </div>
                  <div class="text-center">
                    <a class="small" href="/usuario/create">Crear Cuenta</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>		
		<?php  (TEMPLATE)::footer(); ?>
	</body>
	
</html>








