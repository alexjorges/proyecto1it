    <?php

    // USANDO COMPOSER //
    /* - autoload.php Evita el uso de included y es el sistema de autocarga de composer.
       - Permite autocargar todas las cosas que se han instalado con composer */
     require '../php-composer/vendor/autoload.php';
     

     //SISTEMA DE RUTAS. me traigo una instancia de altorouter, crear un nuevo objeto.
     $router = new AltoRouter();  

     // Esto para que las rutas las atiendas controladores.
     // GET: como envio la informacion
     // '/': La ruta raiz de la app
     // 'FrontController#home': Nombre de el controlador y despues de la almohadilla el método 
     $router->map( 'GET', '/', 'FrontController#home', 'home' );

     $match = $router->match();

    if ($match === false) {
        open404Error();
    }else {
        //callController($match);
    }

    // Esto es una funcion para mandar una cabecera al navegador(header), diciendole que hay un error.
    function open404Error() {
        header($_SERVER["SERVER_PROTOCOL"] . ' 404 Not Found');
        $controllerObject = new App\Controllers\FrontController;
        $controllerObject->error404();
    }
    

    