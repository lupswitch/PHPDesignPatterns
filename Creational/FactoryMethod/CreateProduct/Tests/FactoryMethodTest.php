<?php
/**
 * Created by PhpStorm.
 * User: chastener
 * Date: 02.05.2019
 * Time: 12:18
 */

namespace PHPDesignPatterns\Creational\FactoryMethod\CreateProduct\Tests;

use PHPDesignPatterns\Creational\FactoryMethod\CreateProduct\ConcreteCreator1;
use PHPDesignPatterns\Creational\FactoryMethod\CreateProduct\ConcreteCreator2;
use PHPUnit\Framework\TestCase;

class FactoryMethodTest extends TestCase
{
    /**
     * Test product 1
     */
    public function testProduct1() {
        $creator = new ConcreteCreator1();
        $r = $creator->someOperation();

        $this->assertEquals('Creator: The same creator\'s code has just worked with {Result of the ConcreteProduct1}', $r);
    }

    /**
     * Test product 2
     */
    public function testProduct2() {
        $creator = new ConcreteCreator2();
        $r =$creator->someOperation();
        $this->assertEquals('Creator: The same creator\'s code has just worked with {Result of the ConcreteProduct2}', $r);
    }
}