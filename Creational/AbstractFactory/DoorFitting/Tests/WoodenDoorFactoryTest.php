<?php
/**
 * User: Script
 * Date: 07.10.2018
 * Time: 9:19
 */

namespace PHPDesignPatterns\Creational\AbstractFactory\DoorFitting\Tests;

use PHPDesignPatterns\Creational\AbstractFactory\DoorFitting\Doors\WoodenDoor;
use PHPDesignPatterns\Creational\AbstractFactory\DoorFitting\Experts\Carpenter;
use PHPDesignPatterns\Creational\AbstractFactory\DoorFitting\WoodenDoorFactory;
use PHPUnit\Framework\TestCase;

class WoodenDoorFactoryTest extends TestCase
{
    /**
     *
     */
    public function testInstanceOf()
    {
        $woodenFactory = new WoodenDoorFactory();

        $door = $woodenFactory->makeDoor();
        $expert = $woodenFactory->makeFittingExpert();

        $this->assertInstanceOf(WoodenDoor::class, $door);
        $this->assertInstanceOf(Carpenter::class, $expert);
    }


    /**
     *
     */
    public function testValueCompare ()
    {
        $woodenFactory = new WoodenDoorFactory();

        $door = $woodenFactory->makeDoor();
        $expert = $woodenFactory->makeFittingExpert();

        $this->assertEquals( 'I am a wooden door', $door->getDescription());
        $this->assertEquals( 'I can only fit wooden doors', $expert->getDescription());
    }
}