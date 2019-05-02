<?php
/**
 * Created by PhpStorm.
 * User: chastener
 * Date: 02.05.2019
 * Time: 12:26
 */

namespace PHPDesignPatterns\Creational\FactoryMethod\CreateProduct;

/**
 * Class ConcreteCreator2
 * @package PHPDesignPatterns\Creational\FactoryMethod\CreateProduct
 */
class ConcreteCreator2 extends Creator
{
    public function factoryMethod(): Product
    {
        return new ConcreteProduct2;
    }
}