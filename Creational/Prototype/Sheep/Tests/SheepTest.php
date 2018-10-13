<?php
/**
 * User: Script
 * Date: 13.10.2018
 * Time: 5:32
 */

namespace PHPDesignPatterns\Creational\Prototype\Sheep\Tests;

use PHPDesignPatterns\Creational\Prototype\Sheep\Sheep;
use PHPUnit\Framework\TestCase;

class SheepTest extends TestCase
{
    public function testClone()
    {
        $originalSheep = new Sheep('Jolly');
        $this->assertEquals('Jolly', $originalSheep->getName());
        $this->assertEquals('Mountain Sheep', $originalSheep->getCategory());

        // Cloen and modify
        $clonedSheep = clone $originalSheep;
        $clonedSheep->setName('Dolly');
        $this->assertEquals('Dolly', $clonedSheep->getName());
        $this->assertEquals('Mountain Sheep', $clonedSheep->getCategory());
    }
}