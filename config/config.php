<?php
    
    // PARA EL AUTOLOAD
    $classmap = ['controllers','models','libraries','templates']; // directorios donde buscar clases

    // TEMPLATE A USAR EN LAS VISTAS
    define('TEMPLATE','Basic');
    
    // PARAMETROS DE CONFIGURACION BDD 
    define('DB_HOST','localhost');    // host

    define('DB_USER','root');       // usuario

   // define('DB_USER','root');       // usuario

   // define('DB_HOST','10.199.26.185');    // host
    //define('DB_USER','alumne');       // usuario
    define('DB_PASS','');             // password
    define('DB_NAME','webmascotas');   // base de datos
    define('DB_CHARSET','utf8');      // codificación
    
    // conector que debe usar PDO,solamente si hemos visto PDO además de mysqli 
    // (dependerá del curso)
    define('SGDB','mysql'); 
    
    // CONTROLADOR Y METODO POR DEFECTO
    define('DEFAULT_CONTROLLER', 'Welcome');
    define('DEFAULT_METHOD', 'index');
    
    // PARA EL ENVIO DE MAIL DE CONTACTO
    define('CONTACT_EMAIL', 'pacojesus@g.com');
    
    
    
    
    
    