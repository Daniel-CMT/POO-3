<?php

require_once 'cars.php';
require_once 'bike.php';
require_once 'vehicle.php';
require_once 'highway.php';
require_once 'motorway.php';
require_once 'pedestrianway.php';
require_once 'residentialway.php';
require_once 'skateboard.php';
require_once 'Truck.php';

$cars = new Cars('green', 4, 'electric');
//var_dump($cars);

$bicycle = new Bicycle('blue', 1);
//var_dump($bicycle);

$truck = new Truck ('red', 2, 'fuel', 10);
//var_dump($truck);

$skate = new SkateBoard('multi', 1);
//var_dump($skate);

$motor = new Motorway();
$motor->addVehicle($truck);
$motor->addVehicle($cars);
var_dump($motor->getCurrentVehicle());

$predes = new Predestrianway();
$predes->addVehicle($cars);
$predes->addVehicle($bicycle);
var_dump($predes->getCurrentVehicle());

$resident = new Residentialway();
$resident->addVehicle($cars);
$resident->addVehicle($bicycle);
var_dump($resident->getCurrentVehicle());

/*echo $bicycle->forward();
echo '<br> Vitesse du vélo : ' . $bicycle->getCurrentSpeed() . ' km/h' . '<br>';
echo $bicycle->brake();
echo '<br> Vitesse du vélo : ' . $bicycle->getCurrentSpeed() . ' km/h' . '<br>';
echo $bicycle->brake();
echo '<br>'.'<br>';
echo $cars->start();
echo '<br> Vitesse de la voiture : ' . $cars->getCurrentSpeed() . ' km/h' . '<br>';
echo $cars->forward();
echo '<br> Vitesse de la voiture : ' . $cars->getCurrentSpeed() . ' km/h' . '<br>';
echo $cars->brake();
echo '<br> Vitesse de la voiture : ' . $cars->getCurrentSpeed() . ' km/h' . '<br>';
echo $cars->brake();
echo '<br>'.'<br>';
echo $truck->forward();
echo '<br> Vitesse du camion : ' . $truck->getCurrentSpeed() . ' km/h' . '<br>';
echo $truck->brake();
echo '<br> Vitesse du camion : ' . $truck->getCurrentSpeed() . ' km/h' . '<br>';
echo $truck->brake();
echo '<br>';
//$truck->setLoading(10);
echo $truck->isFilling();*/