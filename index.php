<?php

//require_once './vehicule.php';
require_once './truck.php';

$truck = new Truck('red', 3, 33);

var_dump($truck);

echo $truck->getCapacity().PHP_EOL;

echo $truck->forward().PHP_EOL;

echo $truck->brake();