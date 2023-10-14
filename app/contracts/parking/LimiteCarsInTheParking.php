<?php

declare(strict_types=1);

namespace Mateus\TestPhpunitPhp\contracts\parking;

interface LimiteCarsInTheParking
{
    public function checkLimiteCarsInTheParking($count_cars_in_the_park);
}
