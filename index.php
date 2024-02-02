<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Link css style-->
    <link rel="stylesheet" href="css\style.css">

    <?php

    require_once __DIR__ ."/Models/movie.php";


    //aggiungo un mio nuovo valore 
    $movie5 = new Movie('','','','',$gen1);

    $movie5->setTitolo("cinque");
    $movie5->setDurata("23min");
    $movie5->setCasaProduct("arancio");
    $movie5->setDataUscita("1958-07-02");
    $movie5->setGenere($gen1);

    ?>

    <title>Class php</title>
</head>


<body>

<h1>ELENCO FILM DISPONIBILI</h1>

<h2> Titolo Primo film: <?php echo($movie1->getTitolo())?> </h2>
<h3>Genere: <?php echo($movie1->getGenere()->uno); echo', '.($movie1->getGenere()->due); echo', '.($movie1->getGenere()->tre)?></h3>
<h3>Data di uscita: <?php echo($movie1->getDataUscita())?></h3>
<h3 class="red">Casa di produzione: <?php echo($movie1->getCasaProduct())?></h3>
<h3>Durata: <?php echo($movie1->getDurata())?></h3>
<br><br>    
<h2> Titolo Secondo film: <?php echo($movie2->getTitolo())?> </h2>
<h3>Genere: <?php echo($movie2->getGenere()->uno); echo', '.($movie2->getGenere()->due); echo', '.($movie2->getGenere()->tre)?></h3>
<h3>Data di uscita: <?php echo($movie2->getDataUscita())?></h3>
<h3 class="blu">Casa di produzione: <?php echo($movie2->getCasaProduct())?></h3>
<h3>Durata: <?php echo($movie2->getDurata())?></h3>
<br><br>    
<h2> Titolo Terzo film: <?php echo($movie3->getTitolo())?> </h2>
<h3>Genere: <?php echo($movie3->getGenere()->uno); echo', '.($movie3->getGenere()->due); echo', '.($movie3->getGenere()->tre)?></h3>
<h3>Data di uscita: <?php echo($movie3->getDataUscita())?></h3>
<h3 class="green">Casa di produzione: <?php echo($movie3->getCasaProduct())?></h3>
<h3>Durata: <?php echo($movie3->getDurata())?></h3>
<br><br>    
<h2> Titolo Quarto film: <?php echo($movie4->getTitolo())?> </h2>
<h3>Genere: <?php echo($movie4->getGenere()->uno); echo', '.($movie4->getGenere()->due); echo', '.($movie4->getGenere()->tre)?></h3>
<h3>Data di uscita: <?php echo($movie4->getDataUscita())?></h3>
<h3 class="yellow">Casa di produzione: <?php echo($movie4->getCasaProduct())?></h3>
<h3>Durata: <?php echo($movie4->getDurata())?></h3>
<br><br>    
<h2> Titolo Quinto film: <?php echo($movie5->getTitolo())?> </h2>
<h3>Genere: <?php echo($movie5->getGenere()->uno); echo', '.($movie5->getGenere()->due); echo', '.($movie5->getGenere()->tre)?></h3>
<h3>Data di uscita: <?php echo($movie5->getDataUscita())?></h3>
<h3 class="orange">Casa di produzione: <?php echo($movie5->getCasaProduct())?></h3>
<h3>Durata: <?php echo($movie5->getDurata())?></h3>

</body>
</html>