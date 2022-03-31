<?php

require_once 'Bicycle.php';
require_once 'Car.php';

// Instanciation d'un nouvel objet classe Car $deuxChevaux
$deuxChevaux = new Car('white', 4, 'Sans Plomb 95');

var_dump($deuxChevaux);

if (isset($deuxChevaux->nbWheels)) {
  echo $deuxChevaux->getNbWheels();
}

echo $deuxChevaux->start();
echo $deuxChevaux->forward();
var_dump($deuxChevaux);
echo $deuxChevaux->brake();
var_dump($deuxChevaux);

// Instanciation d'un nouvel objet classe Car $mini
$mini = new Car('green', 4, 'Diesel');

// Instanciation d'un nouvel objet $bike

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
