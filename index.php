<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Class php</title>
</head>
<body>


<?php

class Movie {

    public $titolo;
    public $data_uscita;
    public $casa_produzione;
    public $durata;
    public $genere;

    //dichiaro il costruttore
    public function __construct($titolo,$data_uscita,$casa_produzione,$durata,$genere) {

        $this->titolo = $titolo;
        $this->data_uscita = $data_uscita;
        $this->casa_produzione = $casa_produzione;
        $this->durata = $durata;
        $this->genere = $genere;

    }

    //funzioni set
    public function setTitolo($titolo) {
        $this->titolo = $titolo;
    }

    //funzioni get
    public function getTitolo() {
        return $this->titolo;
    }

    public function getDataUscita() {
        return $this->data_uscita;
    }

}


//istanzio il prio oggetto movie con questi valori
$movie1 = new Movie('primo','2020-05-03','rossa','218 min','guerra');



//eseguo varie prove
var_dump($movie1->getTitolo());

$movie1->setTitolo('poldo');

var_dump($movie1->getTitolo());


?>
    
</body>
</html>