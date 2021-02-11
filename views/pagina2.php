 
<?php 
    // con esto lo que hacemos es decirle a esta página que va a utilizar este layout
    // y mostrara todo lo que venga a continuacion
    $this->layout('layouts/layout') 
?>

<h1> Esta página usa el layout que se llama layout </h1>

<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti, 
nemo adipisci optio amet dicta, delectus voluptate voluptas mollitia earum numquam, 
architecto ipsa? Eveniet perspiciatis iure eius culpa cumque consectetur fuga?
</p>

<ul>
    <li>item 1</li>
    <li>item 2</li>
    <li>item 3</li>
    <li>item 4</li>
</ul>

<?php // con star digo que todo lo que hay aqui dentro pertenece al section que se llama footerLinks ?>
<?php $this->start('footerLinks') ?>  

    <p>
        <a href="#">Link 0</a>
        <a href="#">Link 1</a>
        <a href="#">Link 2</a>
        <a href="#">Link 3</a>
        <a href="#">Link 4</a>
    </p>
<?php $this->stop() ?>

