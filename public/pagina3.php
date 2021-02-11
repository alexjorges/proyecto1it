<?php 

    // - Permite autocargar todas las cosas que se han instalado con composer 
    require '../php-composer/vendor/autoload.php';

    // cargamos el sistema de templates
    use League\Plates\Engine;

    // creamos un nuevo objeto templates diciendole donde van a estar las vistas
    $template = new Engine('../views');

    // le digo que vista quiero utilizar
    echo $template->render('../views/pagina3');

?>