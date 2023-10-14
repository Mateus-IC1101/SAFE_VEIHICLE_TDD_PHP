<?php

declare(strict_types=1);

namespace test;

use Mateus\TestPhpunitPhp\controllers\ParkingController;
use Mateus\TestPhpunitPhp\models\Car;
use PHPUnit\Framework\TestCase;

class ParkingControllerTest extends TestCase
{
    public function test_add_card()
    {
        $car = new Car('Gol', 'VOP-552');
        $controller = new ParkingController();
        $controller->addCar($car);
        self::assertEquals($controller->countCars(), 1);
    }
};
