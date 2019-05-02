<?php
/**
 * Created by PhpStorm.
 * User: chastener
 * Date: 02.05.2019
 * Time: 12:17
 */

namespace PHPDesignPatterns\Creational\FactoryMethod\CreateProduct;


class ConcreteProduct2 implements Product
{
    public function operation(): string
    {
        return "{Result of the ConcreteProduct2}";
    }
}