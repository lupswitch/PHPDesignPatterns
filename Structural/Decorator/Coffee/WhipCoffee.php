<?php
/**
 * User: Script
 * Date: 18.10.2018
 * Time: 6:47
 */

namespace PHPDesignPatterns\Structural\Decorator\Coffee;


class WhipCoffee implements Coffee
{
    protected $coffee;

    public function __construct(Coffee $coffee)
    {
        $this->coffee = $coffee;
    }

    public function getCost()
    {
        return $this->coffee->getCost() + 5;
    }

    public function getDescription()
    {
        return $this->coffee->getDescription() . ', whip';
    }
}