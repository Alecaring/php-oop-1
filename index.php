<?php

require_once "./modules/film.php";
require_once "./modules/movie.php";




$film1 = new Film("alessio", "caringella", "img");

echo $film1->titolo . "<br>";
echo $film1->descrizione . "<br>";
echo $film1->pathImg . "<br>";

