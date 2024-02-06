<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Link css style-->
    <link rel="stylesheet" href="css\style.css">

    <?php

    require_once __DIR__ ."/db.php";

    ?>

    <title>Class php</title>
</head>




<body>

<h1>ELENCO FILM DISPONIBILI</h1>

    <?php 
        foreach ($movies as $movie){
    ?>

    <h2> Titolo Primo film: <?php echo($movie->getTitolo())?> </h2>
    <h3>Genere: <?php echo($movie->getGenere());?></h3>
    <h3>Data di uscita: <?php echo($movie->getDataUscita())?></h3>
    <h3 class="<?php echo($movie->getCasaProduct()) ?>">Casa di produzione: <?php echo($movie->getCasaProduct())?></h3>
    <h3>Durata: <?php echo($movie->getDurata())?></h3>
    <br><br> 

    <?php   
    }
    ?>

</body>
</html>