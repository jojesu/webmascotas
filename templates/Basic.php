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
              <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav">
                  <li class="nav-item">
                	<a href="/mascota/list"  class="nav-link">Lista de mascotas</a>
                  </li>               
                  
                    <?php if(Login::get()){?>
            			<li class="nav-item"><a href="/mascota/create"  class="nav-link">Crear nueva Mascota</a></li>
            		<?php }?>
            		<?php if(Login::isAdmin()){?>           		
                			<li class="nav-item"><a href="/usuario/list" class="nav-link">Lista de usuarios</a></li>           		        	
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
          
        <?php }
    }
    
    