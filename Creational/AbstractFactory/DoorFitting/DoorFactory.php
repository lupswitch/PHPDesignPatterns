<?php
/**
 * User: Script
 * Date: 07.10.2018
 * Time: 8:53
 */

namespace PHPDesignPatterns\Creational\AbstractFactory\DoorFitting;


use PHPDesignPatterns\Creational\AbstractFactory\DoorFitting\Doors\Door;
use PHPDesignPatterns\Creational\AbstractFactory\DoorFitting\Experts\DoorFittingExpert;

interface DoorFactory
{
    /**
     * @return Door
     */
    public function makeDoor(): Door;

    /**
     * @return DoorFittingExpert
     */
    public function makeFittingExpert(): DoorFittingExpert;
}