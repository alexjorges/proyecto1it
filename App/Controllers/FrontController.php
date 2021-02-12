<?php
namespace App\Controllers; // creo un namespace

use League\Plates\Engine; // cargo el sitema de Templates

class FrontController {

    private $templates;

    /* constructor con el que construimos directamente el sistema de carga de templates.
        Creamos un objeto de tipo Engine diciendole donde estan nuestras vistas*/ 
    public function __construct() {
        $this->templates = new Engine('../views');
    }

    public function home() {
        echo $this->templates->render('sections/home');
    }

    public function error404() {
        echo $this->templates->render('sections/404');
    }

}


    