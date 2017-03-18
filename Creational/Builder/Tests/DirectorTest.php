<?php
/**
 * Created by PhpStorm.
 * User: Script
 * Date: 26.02.2017
 * Time: 17:43
 */

namespace PHPDesignPatterns\Creational\Builder\Tests;

use PHPDesignPatterns\Creational\Builder\TruckBuilder;
use PHPDesignPatterns\Creational\Builder\CarBuilder;
use PHPDesignPatterns\Creational\Builder\Director;

class DirectorTest extends \PHPUnit_Framework_TestCase
{
    public function testCanBuildTruck()
    {
        $truckBuilder = new TruckBuilder();
        $newVehicle = (new Director())->build($truckBuilder);

        $this->assertInstanceOf('PHPDesignPatterns\Creational\Builder\Parts\Truck', $newVehicle);
    }

    public function testCanBuildCar()
    {
        $carBuilder = new CarBuilder();
        $newVehicle = (new Director())->build($carBuilder);

        $this->assertInstanceOf('PHPDesignPatterns\Creational\Builder\Parts\Car', $newVehicle);
    }
}