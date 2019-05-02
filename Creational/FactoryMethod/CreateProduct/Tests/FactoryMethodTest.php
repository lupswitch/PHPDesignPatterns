<?php
/**
 * Created by PhpStorm.
 * User: chastener
 * Date: 02.05.2019
 * Time: 12:18
 */

namespace PHPDesignPatterns\Creational\FactoryMethod\CreateProduct\Tests;

use PHPDesignPatterns\Creational\FactoryMethod\CreateProduct\ConcreteCreator1;
use PHPUnit\Framework\TestCase;

class FactoryMethodTest extends TestCase
{
    /**
     *
     */
    public function testProduct1() {
        $creator = new ConcreteCreator1();
        $creator->someOperation();
    }


    public function testProduct2() {
        $creator = new ConcreteCreator2();
        $creator->someOperation();
    }
}