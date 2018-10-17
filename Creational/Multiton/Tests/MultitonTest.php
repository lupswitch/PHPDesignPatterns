<?php
/**
 * User: Script
 * Date: 26.11.2017
 * Time: 17:11
 */

namespace PHPDesignPatterns\Creational\Multiton\Tests;


use PHPDesignPatterns\Creational\Multiton\Multiton;

class MultitonTest extends \PHPUnit\Framework\TestCase
{
    public function testUniqueness()
    {
        $firstCall = Multiton::getInstance(Multiton::INSTANCE_1);
        $secondCall = Multiton::getInstance(Multiton::INSTANCE_1);
        $this->assertInstanceOf(Multiton::class, $firstCall);
        $this->assertSame($firstCall, $secondCall);
    }
    public function testUniquenessForEveryInstance()
    {
        $firstCall = Multiton::getInstance(Multiton::INSTANCE_1);
        $secondCall = Multiton::getInstance(Multiton::INSTANCE_2);
        $this->assertInstanceOf(Multiton::class, $firstCall);
        $this->assertInstanceOf(Multiton::class, $secondCall);
        $this->assertNotSame($firstCall, $secondCall);
    }
}