<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Spaggetti</title>
</head>
<body>
    <h1>Spaghetti PHP!!!</h1>

    <?php

    // USANDO COMPOSER //
    /* - autoload.php Evita el uso de included y es el sistema de autocarga de composer.
       - Permite autocargar todas las cosas que se han instalado con composer */
     require '../php-composer/vendor/autoload.php';

      // Importamos las clases que vamos a utilizar.   
     // tambien podríamos utilizar al sentencia use y no tendríamos que indicarle al crear el objeto el Lib\Breadcrumds
     use Lib\Breadcrumbs;  
     use Carbon\Carbon; // usa la clase Carbon que está dentro del namespace Carbon. Ahora puedo utilizar la clase.
     use Lib\Dates;
     use League\Plates\Engine; // usando templates

     $templates = new Engine('../views'); // para importar todos nuestros templates en un objeto.

     /* Despues de añadir a composer.json, no hace falta usar include.*/
     // include '../Lib/Breadcrumbs.php'; // incluimos la clase. 
     // include '../Lib/Dates.php'; // importamos la clase.
     
     $scrumbs = new Breadcrumbs(); // creamos un nuevo objeto
     $scrumbs->add('/link', 'Sección'); // ejecutamos los metodos deseados
     $scrumbs->show();   



    // USANDO CARBON
    $date = Carbon::now(); // con now utilizo el metodo de clase para crear la fecha de hoy.
    $dateFormat = $date->format('Y'); // le damos formato para que solo muestre el año.
    echo 'La fecha de hoy es: ' .$dateFormat.'<br/>';


    // SEGUIMOS CON CARBON.
    Carbon::setLocale('es'); // para que las fechas salgan en Español.
    $today = Carbon::now(); // fecha de hoy.
    $tomorrow = $today->addDays(1); // creamos la fecha de mañana con el método addDays().
    echo 'La fecha de mañana es: ' .$tomorrow->isoFormat('dddd DD [de] MMMM');
    
    ?>

    <p>
        Estamos utilizando el adaptador Date para trabajar ahora con Carbon. Date es
        nuestra clase personalizada para Carbon.
    </p>

    <p>
        Utilizando la clase Date:<br/> 
        - La fecha de mañana es: 
        <?= Dates::longDate(Dates::tomorrow()) ?>
    </p>

    
    <?php
    // con esto hacemos un render de nuestros templates y devuelve el html resultante.
    // Al mismo tiempo al render se el puede pasar un array asociativo con los datos que la plantilla necesita
      echo $templates->render('template-test', [
          'subtitle' => 'Así es como se pasa una variable por templates'
      ]);
    ?>

    
</body>
</html>