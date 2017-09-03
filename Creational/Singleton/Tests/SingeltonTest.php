<?php

/**
 * User: Script
 * Date: 03.09.2017
 * Time: 17:13
 */
namespace DesignPatterns\Creational\Singleton\Tests;

use PHPDesignPatterns\Creational\Singleton\Singelton;

/**
 * Class SingeltonTest
 * @package DesignPatterns\Creational\Singleton\Tests
 */
class SingeltonTest extends \PHPUnit\Framework\TestCase
{

    /**
     * Test object for  uniqueness
     */
    public function testUniqueness()
    {
        $firstCall = Singelton::getInstance();
        $secondCall = Singelton::getInstance();

        $this->assertInstanceOf(Singleton::class, $firstCall);
        $this->assertSame($firstCall, $secondCall);
    }
}