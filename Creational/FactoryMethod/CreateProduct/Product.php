<?php
/**
 * Created by PhpStorm.
 * User: chastener
 * Date: 02.05.2019
 * Time: 11:40
 */

namespace PHPDesignPatterns\Creational\FactoryMethod\CreateProduct;


/**
 * Interface for main  product
 * @package PHPDesignPatterns\Creational\FactoryMethod\CreateProduct
 */
interface Product
{
    public function operation(): string;
}