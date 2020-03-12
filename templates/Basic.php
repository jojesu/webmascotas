<?php
class Basic{
    // pone el header
    public static function header(string $pagina = ''){?>
        <!-- Jumbotron Header -->
            <header>              
                 <a class="navbar-brand" href="/"><h2>WEBMASCOTAS</h2></a>                      
            </header>
        <?php }
        
        // pone el nav
        public static function nav(){?>
         <!-- Navigation -->
          <nav class="navbar navbar-expand-lg navbar-dark bg-dark navbar-center">
            <div class="container">        
             <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#boton">
             	<span class="navbar-toggler-icon"></span>
             </button> 
              <div class="collapse navbar-collapse" id="boton">
                <ul class="navbar-nav lg-auto">
                  <li class="nav-item">
                	<a href="/mascota/list"  class="nav-link">Lista de mascotas</a>
                  </li>               
                  
                    <?php if(Login::get()){?>
            			<li class="nav-item"><a href="/mascota/create"  class="nav-link">Crear nueva Mascota</a></li>
            		<?php }?>
            		
            		<?php if(Login::isAdmin()){?>           		
                			<li class="nav-item"><a href="/usuario/list" class="nav-link">Lista de usuarios</a></li>
                	<?php }?>		
                	<?php if(Login::isAdmin()||Login::hasPrivilege(500)){?>		           		        	
                			<li class="nav-item"><a href="/tipo/list" class="nav-link">Lista de razas y Tipos</a></li>
            		<?php }?>
            		<li class="nav-item">
                      <a href="/contacto" class="nav-link">Contactar</a>
                  </li>
      
                </ul>
               
              </div>
               <div><?php (TEMPLATE)::login();?></div>
            </div>
            
          </nav>
        <?php } 
        
        // pone el login/logout       
        public static function login(){
            // recupera el usuario identificado mediante el modelo Login
            $identificado = Login::get();
            
            // el enlace depende de si el usuario está identificado o no
           echo $identificado ?
                " <a href='/usuario/show/$identificado->id'><button style='color:light-grey;' type='button' class='btn btn-secondary p-2 ml-2' >Su perfil de $identificado->usuario</button></a>
                  <a href='/login/logout'><button type='button' class='btn btn-secondary p-2 ml-2'>Logout</button></a>":                   
                 "<a href='/login'><button type='button' class='btn btn-primary p-2 ml-2' >Identificarse</button></a>
                  <a href='/usuario/create'><button type='button' class='btn btn-secondary p-2 ml-2'>Registro</button></a>";
                
        }
        
        // pone el footer
        public static function footer(){?>
        
            <footer class="py-1 bg-dark">
            	
            	<p class="text-center text-white">WebMascotas Framework 2020</p>
            	<p class="text-center text-white">Robert@CIFO</p>
            	
            </footer>
            <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
			<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        <?php }
    }   