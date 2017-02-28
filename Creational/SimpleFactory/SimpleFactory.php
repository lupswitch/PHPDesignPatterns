<?php
/**
 * Created by PhpStorm.
 * User: Script
 * Date: 26.02.2017
 * Time: 18:02
 */

namespace PHPDesignPatterns\Creational\SimpleFactory;


class SimpleFactory
{
    public function createBicycle()
    {
        return new Bicycle();
    }

    public function createCar()
    {
        return new Car();
    }
}