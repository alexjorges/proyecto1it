<?php 
    // me traigo este layout
    $this->layout('layouts/layout') 
?>

<h1> Separando las vistas con controladores</h1>

<p>Estamos haciendo al separación de vistas</p>

<p>Estamos en el entorno <?= $_ENV["MODE"] ?>.</p>

<?php this->insert('partials/some-markup', [
    'nuevoTitulo' => 'El Título'
]) ?>

<?php $this->star('footerLinks') ?>
    <p>
        <a href="/otra/carpeta">Otra ruta</a>
        <a href="/producto/1">Producto 1</a>
        <a href="/producto/1">Producto 2</a>
    </p>
<?php $this->stop() ?>