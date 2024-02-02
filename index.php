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
    public  Genere $genere;

    //dichiaro il costruttore
    public function __construct($titolo,$data_uscita,$casa_produzione,$durata,Genere $genere) {

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

    public function setDurata($durata) {
        $this->durata = $durata;
    }
    //funzioni get
    public function getTitolo() {
        return $this->titolo;
    }

    public function getDataUscita() {
        return $this->data_uscita;
    }

    public function getDurata() {
        return $this->durata;
    }

}

class Genere {
    public $uno;
    public $due;

    public $tre;

    //dichiaro il costruttore
    public function __construct($uno,$due,$tre) {

        $this->uno = $uno;
        $this->due = $due;
        $this->tre = $tre;

    }

}


$gen1 = new Genere('guerra','azione','drammatico');

$gen2 = new Genere('ridicolo','avventura','romantico');

//istanzio il prio oggetto movie con questi valori
$movie1 = new Movie('primo','2020-05-03','rossa','218 min',$gen1);

//istanzio il prio oggetto movie con questi valori
$movie2 = new Movie('secodno','1978-07-14','blu','145 min',$gen2);



var_dump($movie1-> genere ->due);


//eseguo varie prove
$movie2->setDurata('32 min');

var_dump($movie2->getDurata());

var_dump($movie1->getTitolo());

$movie1->setTitolo('poldo');

var_dump($movie1->getTitolo());


?>


</body>
</html>