<?php

require_once "./modules/film.php";
require_once "./modules/movie.php";




// $film1 = new Film("alessio", "caringella", "img");

// echo $film1->titolo . "<br>";
// echo $film1->descrizione . "<br>";
// echo $film1->pathImg . "<br>";

echo "<h3>Pagina di Debug</h3>";
echo "<h1>GENERI</h1>";
echo "<hr>";


$genere1 = new Genere("COMMEDIE", "FILM DIVERTENTI E UMORISTICI");
var_dump($genere1->getGenere());
var_dump($genere1->getDescrizione());

echo "<hr>";

$genere2 = new Genere("AZIONE", "FILM AVVINCENTI E SCENICI");
var_dump($genere2->getGenere());
var_dump($genere2->getDescrizione());

echo "<hr>";

echo "<h1>ATTORI</h1>";

echo "<hr>";

echo "<h1>FILM</h1>";

$immagine1 = __DIR__ . "/ass/img1.jpg";
$film1 = new Film(
    $immagine1,
    'Die Hard',
    'Un poliziotto deve salvare gli ostaggi presi da terroristi in un grattacielo.',
    'Barbiero', '06-03-2004', $genere1);var_dump($film1);

echo "<hr>";

$film2 = new Film('', 'Loris', 'cavolo', 'Barbiero', '06-03-2004', $genere2);
var_dump($film2);



