<?php
/**
 * User: Script
 * Date: 07.10.2018
 * Time: 9:22
 */

namespace PHPDesignPatterns\Creational\AbstractFactory\DoorFitting\Tests;

use PHPDesignPatterns\Creational\AbstractFactory\DoorFitting\Doors\PlasticDoor;
use PHPDesignPatterns\Creational\AbstractFactory\DoorFitting\Experts\PVCProfileExpert;
use PHPDesignPatterns\Creational\AbstractFactory\DoorFitting\PVCDoorFactory;
use PHPUnit\Framework\TestCase;

class PVCDoorFactoryTest  extends TestCase
{

    /**
     *
     */
    public function testInstanceOf()
    {
        $woodenFactory = new PVCDoorFactory();

        $door = $woodenFactory->makeDoor();
        $expert = $woodenFactory->makeFittingExpert();

        $this->assertInstanceOf(PlasticDoor::class, $door);
        $this->assertInstanceOf(PVCProfileExpert::class, $expert);
    }


    /**
     *
     */
    public function testValueCompare ()
    {
        $woodenFactory = new PVCDoorFactory();

        $door = $woodenFactory->makeDoor();
        $expert = $woodenFactory->makeFittingExpert();

        $this->assertEquals( 'I am a plastic door', $door->getDescription());
        $this->assertEquals( 'I can only PVC doors', $expert->getDescription());
    }
}