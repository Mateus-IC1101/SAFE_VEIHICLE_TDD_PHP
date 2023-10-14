<?php

require_once 'vendor/autoload.php';

use Mateus\TestPhpunitPhp\controllers\ParkingController;
use Mateus\TestPhpunitPhp\models\Car;

$car = new Car('Gol', 'VOP-552');
$controller = new ParkingController();
$controller->addCar($car);
$controller->addCar($car);
$controller->addCar($car);
$count = $controller->countCars();
var_dump($count);
