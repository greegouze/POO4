<?php 
require_once './MOD/Vehicle.php';
require './MOD/Bicycle.php';

require './MOD/MotorWay.php';
require './MOD/PedestrianWay.php';
require './MOD/ResidentialWay.php';
require './MOD/SkateBoard.php';



//bicycle.php
$bike = new Bicycle('white', 4);
$bike->CurrentSpeed = 10;
 

var_dump($bike);

//Moving bike 
echo $bike->forward();
echo '<br> Vitesse du vélo :' . $bike->CurrentSpeed . 'km/h' . '<br>';
echo $bike->brake();

// Instanciation d'un nouvel objet $rockrider
$rockrider = new Bicycle('green', 1);



// Instanciation d'un nouvel objet $tornado
$tornado = new Bicycle('gray', 2);


//Car.php 
require './MOD/Car.php';

$polo = new Car('white', 4, 'diesel');
$polo->CurrentSpeed = 8;
$polo->EnergyLevel = 50;

echo $polo->forward();
echo '<br> Vitesse de la voiture : ' .$polo->CurrentSpeed . 'km/h' . '<br>';
echo $polo->brake();

var_dump($polo);


//Truck.php

require './MOD/Truck.php';

//instancie new class
$gigaTruck = new Truck('black', 4,'electrique',4000, 100);

echo $gigaTruck->forward();
echo $gigaTruck->brake();
echo $gigaTruck->isFull(80);

$buggy = new Truck('brown', 2, 'diesel',200, 50);

echo $buggy->forward() .PHP_EOL;
echo $buggy->isFull(250);

var_dump($buggy);
var_dump($gigaTruck);


$motorWay = new MotorWay;
$motorWay->addVehicule($polo);

$motorWay->addVehicule($bike);

$skate = new Skateboard('blue', 4);

$pedestrian = new PedestrianWay;
$pedestrian->addVehicule($polo);
$pedestrian->addVehicule($skate);


$residential = new ResidentialWay;
$residential->addVehicule($polo);
$residential->addVehicule($skate);

echo $motorWay->getNbLane();

var_dump($motorWay);
var_dump($pedestrian);
var_dump($residential);


echo '<br>1<br>';
$polo->setParkBrake(true);

try {
    echo ($polo->start());
} catch (Exception $e) {
    echo $e->getMessage();
} finally {
    echo 'Ma polo roule comme un donut';
}



echo '<br>2<br>';
$polo->setParkBrake(false);

try {
    echo ($polo->start());
} catch (Exception $e) {
    echo $e->getMessage();
} finally {
    echo 'Ma polo roule comme un donut';
}
