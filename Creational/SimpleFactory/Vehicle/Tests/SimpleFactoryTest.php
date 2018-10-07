<?php
/**
 * Created by PhpStorm.
 * User: Script
 * Date: 26.02.2017
 * Time: 18:19
 */

namespace PHPDesignPatterns\Creational\SimpleFactory\Vehicle\Tests;


use PHPDesignPatterns\Creational\SimpleFactory\Vehicle\SimpleFactory;

class SimpleFactoryTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test can crate bicycle
     */
    public function testCanCreateBicycle()
    {
        $bicycle = (new SimpleFactory())->createBicycle();
        $this->assertInstanceOf('PHPDesignPatterns\Creational\SimpleFactory\Vehicle\Bicycle', $bicycle);
    }


    /**
     * Test can create car
     */
    public function testCanCreateCar()
    {
        $car = (new SimpleFactory())->createCar();
        $this->assertInstanceOf('PHPDesignPatterns\Creational\SimpleFactory\Vehicle\Car', $car);
    }
}