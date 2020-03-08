<?php

class FotoController{
    //propiedades
    public $id='', $fichero='', $ubicacion='', $idmascota='';
    
    //METODOS
    // operación por defecto
    public function index(){
        $this->list(); // listado de fotos
    }
    
    // lista las fotos
    public function list(){
        
        $fotos = Foto::get();
        
        $usuarios = Usuario::get();
        
        $razas = Raza::get();
        
        $tipos = Tipo::get();
        
        $mascotas = Mascota::get();
        
        include 'views/foto/lista.php';
  
    }
    //PASO 2: guarda la nueva foto
    public function store(){
        // comprueba que llegue el formulario con los datos
        if(empty($_POST['guardar']))
            throw new Exception('No se recibieron los datos');
            // comprueba si es admin, supervisor o usuario registrado
            if(!Login::get()){
                throw new Exception('Debes estar logueado');
            }            
            
            $mascota=Mascota::getMascota($_POST['idmascota']);//recuperamos la mascota para pasarselo a la vista de exito
            $usuario=Login::get(); //recupera el usuario actual
            
            $foto=new Foto();
          
            $foto->ubicacion=DB::escape($_POST['ubicacion']);
            $foto->idmascota=DB::escape($_POST['idmascota']);
            
            // TRATAMIENTO DEL FICHERO IMAGEN
            if(Upload::llegaFichero('fichero'))
             $foto->fichero=Upload::procesar($_FILES['fichero'],'img/mascotas',true,0,'image/*');

            if(!$foto->guardar())
                 throw new Exception('No se pudo guardar en la base de datos');
             
            //muestra la vista de éxito
            $mensaje="Guardado de la foto de la mascota $mascota->nombre correcto.";
            
            $usuario=Login::get(); //recupera el usuario actual
            
            include 'views/exito.php'; //mostrar éxito
    }
        
    // muestra el formulario de confirmación de eliminación
    public function delete(int $id = 0){
        
        // esta operación solamente la puede hacer el administrador
        // o bien el usuario propietario de los datos que se muestran
        if(! (Login::isAdmin() || Login::hasPrivilege(500)|| Login::get()->id == $id))
            throw new Exception('No tienes los permisos necesarios');
            
            // recupera el usuario para mostrar sus datos en la vista
            //if(!$usuario = Usuario::getById($id))
              //throw new Exception("No existe el usuario $id.");
                
                // carga la vista de confirmación de borrado
                include 'views/foto/borrar.php';
    }
    
    //elimina la foto
    public function destroy(){
        
        // esta operación solamente la puede hacer el administrador
        // o bien el usuario propietario de los datos que se muestran
        if(! (Login::isAdmin() || Login::hasPrivilege(500) || Login::get()->id == $id))
            throw new Exception('No tienes los permisos necesarios');
            
            //recuperar el identificador vía POST
            $id = empty($_POST['id'])? 0 : intval($_POST['id']);
            
            $ruta=$_POST['fichero'];
            // borra el usuario de la BDD
            if(!Foto::borrar($id))
                throw new Exception("No se pudo borrar la foto $id");
            
                //si la imagen no es la imagen por defecto la borramos de la DB
                if(unlink($ruta))                
                    $mensaje .= " La foto ha sido borrada correctamente.";
                
                include 'views/exito.php'; //mostrar éxito
    }
    
    //recuperamos las últimas fotos subidas
    public static function getUltimasFotos(int $int){
        
        $ultimasfotos = Foto::getUltimas($ultimas);
        
        return $ultimasfotos;
        
    }
    
    
    
}

