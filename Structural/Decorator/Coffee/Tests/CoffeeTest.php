<?php
/**
 * User: Script
 * Date: 18.10.2018
 * Time: 6:48
 */

namespace PHPDesignPatterns\Structural\Decorator\Coffee\Tests;

use PHPDesignPatterns\Structural\Decorator\Coffee\MilkCoffee;
use PHPDesignPatterns\Structural\Decorator\Coffee\SimpleCoffee;
use PHPDesignPatterns\Structural\Decorator\Coffee\VanillaCoffee;
use PHPDesignPatterns\Structural\Decorator\Coffee\WhipCoffee;
use PHPUnit\Framework\TestCase;


class CoffeeTest extends TestCase
{
    public function testCofee()
    {
        $someCoffee = new SimpleCoffee();
        $this->assertEquals(10, $someCoffee->getCost());
        $this->assertEquals('Simple coffee' , $someCoffee->getDescription());

        $someCoffee = new MilkCoffee($someCoffee);
        $this->assertEquals(12, $someCoffee->getCost());
        $this->assertEquals('Simple coffee, milk' , $someCoffee->getDescription());

        $someCoffee = new WhipCoffee($someCoffee);
        $this->assertEquals(17, $someCoffee->getCost());
        $this->assertEquals('Simple coffee, milk, whip' , $someCoffee->getDescription());

        $someCoffee = new VanillaCoffee($someCoffee);
        $this->assertEquals(20, $someCoffee->getCost());
        $this->assertEquals('Simple coffee, milk, whip, vanilla' , $someCoffee->getDescription());
    }
}