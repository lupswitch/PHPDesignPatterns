<?php
/**
 * Created by PhpStorm.
 * User: Script
 * Date: 26.02.2017
 * Time: 18:19
 */

namespace PHPDesignPatterns\Creational\SimpleFactory\Tests;


use PHPDesignPatterns\Creational\SimpleFactory\SimpleFactory;

class SimpleFactoryTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test can crate bicycle
     */
    public function testCanCreateBicycle()
    {
        $bicycle = (new SimpleFactory())->createBicycle();
        $this->assertInstanceOf('PHPDesignPatterns\Creational\SimpleFactory\Bicycle', $bicycle);
    }


    /**
     * Test can create car
     */
    public function testCanCreateCar()
    {
        $car = (new SimpleFactory())->createCar();
        $this->assertInstanceOf('PHPDesignPatterns\Creational\SimpleFactory\Car', $car);
    }
}