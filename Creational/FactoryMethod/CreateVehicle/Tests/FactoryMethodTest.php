<?php
namespace PHPDesignPatterns\Creational\FactoryMethod\Tests;

use PHPDesignPatterns\Creational\FactoryMethod\Bicycle;
use PHPDesignPatterns\Creational\FactoryMethod\CarFerrari;
use PHPDesignPatterns\Creational\FactoryMethod\CarMercedes;
use PHPDesignPatterns\Creational\FactoryMethod\CarSubaru;
use PHPDesignPatterns\Creational\FactoryMethod\FactoryMethod;
use PHPDesignPatterns\Creational\FactoryMethod\GermanFactory;
use PHPDesignPatterns\Creational\FactoryMethod\ItalianFactory;
use PHPDesignPatterns\Creational\FactoryMethod\JapanFactory;

/**
 * Class FactoryMethodTest
 * @package PHPDesignPatterns\Creational\FactoryMethod\Tests
 */
class FactoryMethodTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Can create cheap vehicle in germany
     */
    public function testCanCreateCheapVehicleInGermany()
    {
        $factory = new GermanFactory();
        $result = $factory->create(FactoryMethod::CHEAP);

        $this->assertInstanceOf(Bicycle::class, $result);
    }


    /**
     * Can create fast vehicle in gemrany
     */
    public function testCanCreateFastVehicleInGermany()
    {
        $factory = new GermanFactory();
        $result = $factory->create(FactoryMethod::FAST);

        $this->assertInstanceOf(CarMercedes::class, $result);
    }

    /**
     * Can ceate cheap vehicle in Italy
     */
    public function testCanCreateCheapVehicleInItaly()
    {
        $factory = new ItalianFactory();
        $result = $factory->create(FactoryMethod::CHEAP);

        $this->assertInstanceOf(Bicycle::class, $result);
    }


    /**
     *
     */
    public function testCanCreateFastVehicleInItaly()
    {
        $factory = new ItalianFactory();
        $result = $factory->create(FactoryMethod::FAST);

        $this->assertInstanceOf(CarFerrari::class, $result);
    }


    /**
     *
     */
    public function testCanCreateCheapVehicleInJapan()
    {
        $factory = new JapanFactory();
        $result = $factory->create(FactoryMethod::CHEAP);

        $this->assertInstanceOf(Bicycle::class, $result);
    }


    /**
     *
     */
    public function testCanCreateFastVehicleInJapan()
    {
        $factory  = new JapanFactory();
        $result = $factory->create(FactoryMethod::FAST);

        $this->assertInstanceOf(CarSubaru::class, $result);
    }


    /**
     * @expectedException \InvalidArgumentException
     * @expectedExceptionMessage spaceship is not a valid vehicle
     */
    public function testUnknownType()
    {
        (new ItalianFactory())->create('spaceship');
    }
}
