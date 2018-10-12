<?php
/**
 * User: Script
 * Date: 12.10.2018
 * Time: 5:48
 */

namespace PHPDesignPatterns\Creational\Builder\BurgerBuilder\Tests;

use PHPDesignPatterns\Creational\Builder\BurgerBuilder\Burger;
use PHPDesignPatterns\Creational\Builder\BurgerBuilder\BurgerBuilder;
use PHPUnit\Framework\TestCase;


class BurgerBuilderTest extends TestCase
{
    public function testBurgerBuilder ()
    {
        $burger = (new BurgerBuilder(14))
            ->addPepperoni()
            ->addLettuce()
            ->addTomato()
            ->build();
        $this->assertInstanceOf(Burger::class, $burger);
    }

    public function testBurgerBuilderParams()
    {
        $burger = (new BurgerBuilder(14))
            ->addPepperoni()
            ->addLettuce()
            ->addTomato()
            ->build();

        $this->assertEquals(14, $burger->getSize());
        $this->assertEquals(true, $burger->getPepperoni());
    }
}