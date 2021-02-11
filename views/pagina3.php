<?php $this->layout('layouts/layout') ?>

Otro contenido

<?php 
    // utilizando partials. partes de codigo que queremos mostrar en diferentes sitios.
    $this->insert('partials/some-markup', [
        'nuevoTitulo' => 'Este es un ejemplo de partials, para mostrar codigo en diferentes sitios.'
    ]);
?>