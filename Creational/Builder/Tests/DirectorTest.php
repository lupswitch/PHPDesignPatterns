<?php

namespace PHPDesignPatterns\Creational\Builder\Tests;

use PHPDesignPatterns\Creational\Builder\Vehicles\Car;
use PHPDesignPatterns\Creational\Builder\Vehicles\Truck;
use PHPDesignPatterns\Creational\Builder\TruckBuilder;
use PHPDesignPatterns\Creational\Builder\CarBuilder;
use PHPDesignPatterns\Creational\Builder\Director;

/**
 * Class DirectorTest
 * @package PHPDesignPatterns\Creational\Builder\Tests
 */
class DirectorTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test build track object
     */
    public function testCanBuildTruck()
    {
        $truckBuilder = new TruckBuilder();
        $newVehicle = (new Director())->build($truckBuilder);

        $this->assertInstanceOf(Truck::class, $newVehicle);
    }


    /**
     * Test build car object
     */
    public function testCanBuildCar()
    {
        $carBuilder = new CarBuilder();
        $newVehicle = (new Director())->build($carBuilder);

        $this->assertInstanceOf(Car::class, $newVehicle);
    }
}
