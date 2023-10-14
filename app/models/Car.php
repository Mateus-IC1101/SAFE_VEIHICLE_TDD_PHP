<?php

declare(strict_types=1);

namespace Mateus\TestPhpunitPhp\models;


class Car
{

    public String $modelo;
    public String $placa;

    public function __construct(String $modelo, String $placa)
    {
        $this->modelo = $modelo;
        $this->placa = $placa;
    }
}
