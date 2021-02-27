<?php

require_once "Car.php";

$car = new Car();
$car->addTires();
$car->addEngine();
$car->startCar();
$car->inflateTires();
$car->startCar();
$car->drive();
$car->stopCar();

?>