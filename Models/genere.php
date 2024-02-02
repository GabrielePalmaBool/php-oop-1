<?php

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

$gen3 = new Genere('fantastico','fantascienza','horror');

?>