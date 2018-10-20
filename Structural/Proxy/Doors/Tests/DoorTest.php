<?php
/**
 * User: Script
 * Date: 20.10.2018
 * Time: 7:56
 */

namespace PHPDesignPatterns\Structural\Proxy\Doors\Tests;

use PHPDesignPatterns\Structural\Proxy\Doors\LabDoor;
use PHPDesignPatterns\Structural\Proxy\Doors\Security;
use PHPUnit\Framework\TestCase;
class DoorTest extends TestCase
{

    /**
     * Test door
     */
    public function testDoor()
    {
        $door = new Security(new LabDoor());
        $this->assertEquals(false, $door->open('invalid')); // Big no! It ain't possible.
        $this->assertEquals(true, $door->open('$ecr@t'));
        $this->assertEquals(true, $door->close());
    }
}