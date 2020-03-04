<?php
//CONTROLADOR 
class TipoController{
    
    //operación por defecto
    public function index(){
        
        $this->list(); //nos lleva a la lista de tipos de mascotas
    }
    
    //operación para listar todos los tipos de mascotas
    public function list(){
        
        //cargar la vista del listado
        include 'views/tipo/lista.php';
    }
    
    //operación para listar todos tipos de las mascotas de un usuario
    public function tiposUsuario(){
        $usuario=Login::getUsuario(); //recupera el usuario actual
        
        $tipos=Tipo::getAdUser($usuario->id); //recupera los tipos de mascotas del usuario
        
        //cargar la vista del listado
        include 'views/tipo/lista.php';
    }
    
    //muestra un tipo de mascota
    public function show($id=false){
        //comprobar que me llega el código
        if(!$id)
            throw new Exception("No se indicó el tipo de mascota a ver.");
            
            //recuperar el tipo de mascota con dicho código
            $tipo=Tipo::getTipo($id);
            
            //comprobar que la mascota existe
            if(!$tipo)
                throw new Exception("No existe el tipo de mascota $id.");
                
                //cargar la vista de detalles
                include 'views/tipo/detalles.php';
    }
    
    //GUARDAR SE HACE EN 2 PASOS
    //PASO 1: muestra el formulario de nuevo tipo
    public function create(){
        if(!Login::getUsuario()){
            throw new Exception('Debes ser admin, supervisor o usuario registrado');
        }
        
        include 'views/tipo/nuevo.php';
    }
    
    //PASO 2: guarda el nuevo tipo de mascota
    public function store(){
        // comprueba que llegue el formulario con los datos
        if(empty($_POST['guardar']))
            throw new Exception('No se recibieron los datos');
            // comprueba si es admin, supervisor o usuario registrado
            if(!Login::getUsuario()){
                throw new Exception('Debes ser admin o usuario registrado');
            }
            
            $usuario=Login::getUsuario(); //recupera el usuario actual
            
            $tipo = new Tipo();  //nueva  tipo de mascota, la info viene por POST
            $tipo->nombre=DB::escape($_POST['nombre']);
            $tipo->descripcion=DB::escape($_POST['descripcion']);
                
                if(!$tipo->guardar()) //guardar en la BDD
                    throw new Exception("No se pudo guardar $tipo->nombre");
                    
                    //muestra la vista de éxito
                    $mensaje="Guardado del tipo de mascota $tipo->nombre correcto.";
                    
                    $usuario=Login::getUsuario(); //recupera el usuario actual
                    
                    include 'views/exito.php'; //mostrar éxito
    }
    
    //ACTUALIZAR SE HACE EN 2 PASOS
    //PASO 1: muestra el formulario de edición de una mascota
    public function edit(int $id=0){
        
        $usuario=Login::getUsuario(); //recupera el usuario actual
        $tipo = Tipo::getTipo($id);
        
        if((!$usuario || $usuario->id!=$tipo->idusuario) && !Login::isAdmin())
            throw new Exception('No tienes permiso');
            
            //comprobar que me llega el identificador
            if(!$id)
                throw new Exception("No se indicó el tipo de mascota a editar.");
                
                //comprobar que el tipo de mascota existe
                if(!$tipo)
                    throw new Exception("No existe el tipo de mascota $id.");
                    
                    //cargar la vista del formulario
                    include 'views/tipo/actualizar.php';
    }
    
    //PASO 2: aplica los cambios del tipo de mascota
    public function update(){
        //comprueba que llegue el formulario con los datos y no por URL
        if(empty($_POST['actualizar']))
            throw new Exception('No está permitido entrar por la URL');
            
            //recuperar el anuncio de la BDD
            $tipo = Tipo::getTipo(intval($_POST['id']));
            
            //comprobar que existe la mascota
            if(!$tipo)
                throw new Exception('No existe el tipo de mascota');
                
                $id=intval($_POST['id']); //recuperar el id vía POST
                
                $usuario = Login::getUsuario(); //recupera el usuario actual
                $tipo = Tipo::getTipo($id);
                
                if((!$usuario || $usuario->id!=$tipo->idusuario) && !Login::isAdmin())
                    throw new Exception('No tienes permiso');
                    
                    $tipo = new Tipo();  //nueva  tipo de mascota, la info viene por POST
                    $tipo->nombre=DB::escape($_POST['nombre']);
                    $tipo->descripcion=DB::escape($_POST['descripcion']);
                    
                        // mostrar detalles del tipo de mascota editada
                        $this->show($tipo->id);
    }
    
    //ELIMINAR SE HACE EN 2 PASOS
    //(si queremos hacerlo con formulario de confirmación)
    
    //PASO 1: muestra el formulario de confirmación de eliminación
    public function delete(int $id=0){
        
        $usuario = Login::getUsuario(); //recupera el usuario actual
        $tipo = Tipo::getTipo($id);
        
        if((!$usuario || $usuario->id!=$tipo->idusuario) && !Login::isAdmin())
            throw new Exception('No tienes permiso');
            
            //comprobar que me llega el identificador
            if(!$id)
                throw new Exception("No se indicó el tipo de mascota a borrar.");
                
                //comprobar que la mascota existe
                if(!$tipo)
                    throw new Exception("No existe el tipo de mascota con id $id.");
                    
                    //ir al formulario de confirmación
                    include 'views/tipo/borrar.php';
    }
    //PASO 2: elimina el tipo de mascota
    public function destroy(){
        //comprobar que me lleguen los datos del formulario y no por URL
        if(empty($_POST['confirmarborrado']))
            throw new Exception('No está permitido entrar desde la URL');
            
            $id=intval($_POST['id']); //recuperar el id vía POST
            
            $usuario = Login::getUsuario(); //recupera el usuario actual
            $tipo = Tipo::getMascota($id);
            
            if((!$usuario || $usuario->id!=$tipo->idusuario) && !Login::isAdmin())
                throw new Exception('No tienes permiso');
                
                //intenta borrar el tipo de la BDD
                if(!Tipo::borrar($id))
                    throw new Exception("No se pudo borrar");
                    
                    //mostrar la vista de éxito
                    $mensaje="Borrado correcto.";
                    
                    include 'views/exito.php'; //mostrar éxito
    }
    
    public function filtered(){
        
        //recuperar la lista de anuncios
        $campo=empty($_POST['campo'])? 'titol' : $_POST['campo'];
        $valor=empty($_POST['valor'])? '' : $_POST['valor'];
        $orden=empty($_POST['orden'])? 'id' : $_POST['orden'];
        $sentido=empty($_POST['sentido'])? 'ASC' : $_POST['sentido'];
        
        $tipos=Tipo::getFiltered($campo, $valor, $orden, $sentido);
        
        $usuario=Login::getUsuario(); //recupera el usuario actual
        
        //mostrar lista
        include 'views/tipo/lista.php';
    }
    
}
