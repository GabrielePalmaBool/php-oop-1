<?php 

require_once __DIR__ ."/Models/movie.php";
require_once __DIR__ ."/Models/genere.php";

$gen1 = new Genere('guerra');
$gen2 = new Genere('azione');
$gen3 = new Genere('drammatico');
$gen4 = new Genere('ridicolo');
$gen5 = new Genere('avventura');
$gen6 = new Genere('romantico');
$gen7 = new Genere('fantastico');
$gen8 = new Genere('fantascienza');
$gen9 = new Genere('horror');

$genT1 = [$gen1,$gen2,$gen3];

$genT2 = [$gen4,$gen5,$gen6];

$genT3 = [$gen7,$gen8,$gen9];



//istanzio il prio oggetto movie con questi valori
$movie1 = new Movie('primo','2020-05-03','rossa','218 min',$genT1);

//istanzio il prio oggetto movie con questi valori
$movie2 = new Movie('secondo','1978-07-14','blu','145 min',$genT2);

//istanzio il prio oggetto movie con questi valori
$movie3 = new Movie('terzo','2001-03-22','verde','113 min',$genT3);

//istanzio il prio oggetto movie con questi valori
$movie4 = new Movie('quarto','1998-01-10','gialla','127 min',$genT1);

//aggiungo un mio nuovo valore 
$movie5 = new Movie('cinque','1958-07-02','arancio','23min',$genT3);

//creo il mio array di oggetti
$movies = [ $movie1 , $movie2,$movie3,$movie4,$movie5];

?>