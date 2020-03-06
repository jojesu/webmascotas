<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Recuperar clave</title>
		<style>
		  form label{
		      display: inline-block;
		      min-width: 100px;
		      padding: 5px;
		  }
		</style>
		<link href="/css/sb-admin-2.min.css" rel="stylesheet">
    	<link href="/css/bootstrap.min.css" rel="stylesheet">
    	<link href="/css/heroic-features.css" rel="stylesheet">
    	<link href="/css/estilos.css" rel="stylesheet">
	</head>
	
	<body>
		<?php 
		  (TEMPLATE)::header("Recuperar Clave");
		  (TEMPLATE)::nav();
		  
		?>  
		

 <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-6 d-none d-lg-block bg-password-image"></div>
              <div class="col-lg-6">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-2">¿Olvidate tu clave?</h1>
                    <p class="mb-4">Cosas que pasan, ya lo sabemos, identificate y te generaremos una nueva clave!</p>
                  </div>
                  <form class="user" method="post" action="/forgotpassword/send">
                    <div class="form-group">
                      <input type="text" name="usuario" required class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Usuario">
                    </div>
                    <div class="form-group">
                      <input type="email" name="email" required class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Email">
                    </div>
                    <input type="submit" name="generar" value="Generar nueva clave" class="btn btn-primary btn-user btn-block">                          
                  </form>
                  <hr>
                  <div class="text-center">
                    <a class="small" href="/usuario/create">Crear cuenta</a>
                  </div>
                  <div class="text-center">
                    <a class="small" href="login">¿Ya tiene cuenta? Login!</a>
                  </div>
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








