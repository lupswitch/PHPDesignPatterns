<?php
/**
 * Created by PhpStorm.
 * User: Script
 * Date: 26.02.2017
 * Time: 17:02
 */

namespace PHPDesignPatterns\Creational\Builder;


use PHPDesignPatterns\Creational\Builder\Parts\Vehicle;

class Director
{
    public function build (BuilderInterface $builder) : Vehicle
    {
        $builder->createVehicle();
        $builder->addDoors();
        $builder->addEngine();
        $builder->addWheel();

        return $builder->getVehicle();
    }
}