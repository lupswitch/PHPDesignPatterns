<?php
/**
 * User: Script
 * Date: 18.10.2018
 * Time: 6:42
 */

namespace PHPDesignPatterns\Structural\Decorator\Coffee;


class SimpleCoffee implements Coffee
{
    public function getCost()
    {
        return 10;
    }

    public function getDescription()
    {
        return 'Simple coffee';
    }
}