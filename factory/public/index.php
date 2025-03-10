<?php

use App\Factory\VehiculeFactory;

require('../vendor/autoload.php');

$truck = VehiculeFactory::create("Truck");

echo $truck->getCostPerKm() . " " .$truck->getFuelType();

$bicycle = VehiculeFactory::createByParam(19.0,19.9);

echo "\n".$bicycle->getCostPerKm() . " " .$bicycle->getFuelType();