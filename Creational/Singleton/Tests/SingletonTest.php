<?php

/**
 * User: Script
 * Date: 03.09.2017
 * Time: 17:13
 */
namespace PHPDesignPatterns\Creational\Singleton\Tests;

use PHPDesignPatterns\Creational\Singleton\Singleton;

/**
 * Class SingeltonTest
 * @package DesignPatterns\Creational\Singleton\Tests
 */
class SingletonTest extends \PHPUnit\Framework\TestCase
{

    /**
     * Test object for  uniqueness
     */
    public function testUniqueness()
    {
        $firstCall = Singleton::getInstance();
        $secondCall = Singleton::getInstance();

        $this->assertInstanceOf(Singleton::class, $firstCall);
        $this->assertSame($firstCall, $secondCall);
    }
}