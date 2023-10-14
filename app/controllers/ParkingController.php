<?php

declare(strict_types=1);

namespace Mateus\TestPhpunitPhp\controllers;

use Exception;
use Mateus\TestPhpunitPhp\contracts\parking\LimiteCarsInTheParking;
use Mateus\TestPhpunitPhp\models\Car;

class ParkingController implements LimiteCarsInTheParking
{

    private $list_car = [];

    public function addCar(Car $car): void
    {
        $this->checkLimiteCarsInTheParking(count($this->list_car));
        $this->list_car[] = $car;
    }

    public function countCars(): int
    {
        return count($this->list_car);
    }
    public function checkLimiteCarsInTheParking($checkLimiteCarsInTheParking)
    {
        if ($checkLimiteCarsInTheParking > 100) {
            throw new Exception("Ocorreu um erro específico");
        }
    }
}
