<?php
/**
 * User: Script
 * Date: 18.10.2018
 * Time: 6:43
 */

namespace PHPDesignPatterns\Structural\Decorator\Coffee;


class MilkCoffee
{
    protected $coffee;

    public function __construct(Coffee $coffee)
    {
        $this->coffee = $coffee;
    }

    public function getCost()
    {
        return $this->coffee->getCost() + 2;
    }

    public function getDescription()
    {
        return $this->coffee->getDescription() . ', milk';
    }
}