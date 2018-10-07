<?php
/**
 * User: Script
 * Date: 06.10.2018
 * Time: 7:53
 */

namespace PHPDesignPatterns\Creational\SimpleFactory\Door\Tests;


use PHPDesignPatterns\Creational\SimpleFactory\Door\DoorFactory;

class DoorTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test can crate bicycle
     */
    public function testCanCreateDoor()
    {
        $woodenDoor =  DoorFactory::makeDoor(100, 200);
        $this->assertInstanceOf('PHPDesignPatterns\Creational\SimpleFactory\Door\WoodenDoor', $woodenDoor);
    }

    public function testDorrParams()
    {
        $door = DoorFactory::makeDoor(100, 200);

        $this->assertEquals(100, $door->getWidth());
        $this->assertEquals(200, $door->getHeight());
    }
}