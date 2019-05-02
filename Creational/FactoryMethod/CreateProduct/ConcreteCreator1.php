<?php
/**
 * Created by PhpStorm.
 * User: chastener
 * Date: 02.05.2019
 * Time: 12:25
 */

namespace PHPDesignPatterns\Creational\FactoryMethod\CreateProduct;


class ConcreteCreator1 extends Creator
{
    public function factoryMethod(): Product
    {
        return new ConcreteProduct1;
    }
}