<?php
/**
 * User: Script
 * Date: 03.09.2017
 * Time: 18:02
 */
namespace PHPDesignPatterns\Creational\Prototype\Book;

/**
 * Class BusinessBookPrototype
 * @package DesignPatterns\Creational\Prototype
 */
class BusinessBookPrototype extends BookPrototype
{
    protected $category = 'Business';

    public function __clone()
    {
        // TODO: Implement __clone() method.
    }
}