<?php
/**
 * User: Script
 * Date: 07.10.2018
 * Time: 9:16
 */

namespace PHPDesignPatterns\Creational\AbstractFactory\DoorFitting\Tests;

use PHPDesignPatterns\Creational\AbstractFactory\DoorFitting\Doors\IronDoor;
use PHPDesignPatterns\Creational\AbstractFactory\DoorFitting\Experts\Welder;
use PHPDesignPatterns\Creational\AbstractFactory\DoorFitting\IronDoorFactory;
use PHPUnit\Framework\TestCase;

/**
 * Class IronDoorFactoryTest
 * @package PHPDesignPatterns\Creational\AbstractFactory\DoorFitting\Tests
 */
class IronDoorFactoryTest extends TestCase
{
    /**
     *
     */
    public function testInstanceOf()
    {
        $woodenFactory = new IronDoorFactory();

        $door = $woodenFactory->makeDoor();
        $expert = $woodenFactory->makeFittingExpert();

        $this->assertInstanceOf(IronDoor::class, $door);
        $this->assertInstanceOf(Welder::class, $expert);
    }


    public function testValueCompare ()
    {
        $woodenFactory = new IronDoorFactory();

        $door = $woodenFactory->makeDoor();
        $expert = $woodenFactory->makeFittingExpert();

        $this->assertEquals( 'I am an iron door', $door->getDescription());
        $this->assertEquals('I can only fit iron doors', $expert->getDescription());
    }
}