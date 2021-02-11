<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Separacion de vistas</title>
    <link rel="stylesheet" href="/assets/styles.css"  type="text/css">
    
</head>
<body>
    <header>
        <img src="/assets/images/logohtml.png" alt="Logo">
    </header>

    <main>
        <?=
            // $this da acceso a las funcionalidades de Plates. Content es el contenido principal
            $this->section('content') 
        ?> 
    </main>
    

    <footer>
        © Copyright...
        <?= $this->section('footerLinks') ?>
    </footer>
    
</body>
</html>