<?php

//require __DIR__ . '/Movie.php';     
require __DIR__ . '/MoviePhysical.php';

$movie = new Movie('psychose', 1960, true);

var_dump($movie);

var_dump($movie->getTitle());

$movie->setTitle('les oiseaux');
var_dump($movie->getTitle());

$movie->addActor('Anthony Perkins');
var_dump($movie->getActor());

$movie->addActor('Gary Grant');
var_dump($movie->getActor());


var_dump($movie->getFav());
var_dump($movie->toggleFavorite());

var_dump($movie->getDate());
var_dump($movie->isRecent());

if ($movie->getDate() >= 2000){
    echo 'this movie is classified in the "recent movies" category (released date from year 2000 to now)';
} else {
    echo 'this movie is classified in the "old movies" category (released before 2000)'.PHP_EOL;
}

$moviePhysical = new MoviePhysical('psychose', 1960, true, 29, 'VHS');

var_dump($moviePhysical);

$priceVAT = $moviePhysical->getPriceWithVAT();
var_dump($priceVAT);

