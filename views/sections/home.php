<?php 
    // me traigo este layout
    $this->layout('layouts/layout') 
?>

<h1> Separando las vistas con controladores</h1>

<p>Estamos haciendo al separación de vistas</p>

<?php $this->insert('partials/some-markup', [
    'nuevoTitulo' => 'Sistema de Routing con Vistas'
]) ?>

<?php $this->start('footerLinks') ?>
    <p>
        <a href="/otra/carpeta">Otra ruta</a>
        <a href="/producto/1">Producto 1</a>
        <a href="/producto/1">Producto 2</a>
    </p>
<?php $this->stop() ?>