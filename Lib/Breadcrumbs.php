<?php

namespace Lib; // este es el nombre que le damos a nuestro espacio de nombre. 

class Breadcrumbs {

    private $parts = [];


    public function __construct() {
        $this->add('/', 'Home');
    }

    public function add($url, $name){
        array_push($this->parts, [
            'url' => $url,
            'name' => $name
        ]);
    }


    public function show(){
        echo '<div class="breadcrumbs">';
        foreach($this->parts as $index => $part){
            echo '<a href="' . $part["url"] . '">' . $part["name"] . '</a>';
            if ($index < count($this->parts) -1 ) {
                echo ' &gt; ';
            }
        }
        echo '</div>';
    }
}



?>