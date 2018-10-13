<?php
/**
 * User: Script
 * Date: 03.09.2017
 * Time: 18:03
 */
namespace PHPDesignPatterns\Creational\Prototype\Book;

/**
 * Class HistoryBookPrototype
 * @package DesignPatterns\Creational\Prototype
 */
class HistoryBookPrototype extends BookPrototype
{
    protected $category = 'History';

    public function __clone()
    {
        // TODO: Implement __clone() method.
    }
}