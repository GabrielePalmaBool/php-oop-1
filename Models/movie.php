<?php
class Movie {

    public $titolo;
    public $data_uscita;
    public $casa_produzione;
    public $durata;
    public $generi;

    //dichiaro il costruttore
    public function __construct($titolo,$data_uscita,$casa_produzione,$durata,$generi) {

        $this->titolo = $titolo;
        $this->data_uscita = $data_uscita;
        $this->casa_produzione = $casa_produzione;
        $this->durata = $durata;
        $this->generi = $generi;

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
    public function setGenere($generi) {
        $this->generi = $generi;
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

        //dichiaro il mio array di oggetti "genere" 
        $infoGenres = "";
        
        foreach ($this -> generi as $genere) {

            //popolo il mio array di poggetti generi
            $infoGenres .= " - " . $genere -> name;

        }
        
        //restituisco l'array di oggetti
        return $this ->$infoGenres;
       
    }

    public function getDurata() {
        return $this->durata;
    }

}

?>