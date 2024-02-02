<?php

require_once __DIR__ ."/genere.php";

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
    public function setDataUscita($data_uscita) {
        $this->data_uscita = $data_uscita;
    }
    public function setCasaProduct($casa_produzione) {
        $this->casa_produzione = $casa_produzione;
    }
    public function setDurata($durata) {
        $this->durata = $durata;
    }
    public function setGenere($genere) {
        $this->genere = $genere;
    }
    //funzioni get
    public function getTitolo() {
        return $this->titolo;
    }

    public function getDataUscita() {
        return $this->data_uscita;
    }

    public function getCasaProduct() {
        return $this->casa_produzione;
    }

    public function getGenere() {
        return $this->genere;
    }

    public function getDurata() {
        return $this->durata;
    }

}

//istanzio il prio oggetto movie con questi valori
$movie1 = new Movie('primo','2020-05-03','rossa','218 min',$gen1);

//istanzio il prio oggetto movie con questi valori
$movie2 = new Movie('secondo','1978-07-14','blu','145 min',$gen2);

//istanzio il prio oggetto movie con questi valori
$movie3 = new Movie('terzo','2001-03-22','verde','113 min',$gen3);

//istanzio il prio oggetto movie con questi valori
$movie4 = new Movie('quarto','1998-01-10','gialla','127 min',$gen1);

?>