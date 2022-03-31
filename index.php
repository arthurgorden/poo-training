<?php

require_once 'Bicycle.php';

$bike = new Bicycle('blue');

var_dump($bike);

$bike->setCurrentSpeed(0);

var_dump($bike);


// Moving bike

echo $bike->forward();

echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';

echo $bike->brake();

echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';

echo $bike->brake();

var_dump($bike);

$bike->dump();

// Instanciation d'un nouvel objet $rockrider

$rockrider = new Bicycle('yellow');

// Instanciation d'un nouvel objet $tornado

$tornado = new Bicycle('black');

$tornado->forward();
