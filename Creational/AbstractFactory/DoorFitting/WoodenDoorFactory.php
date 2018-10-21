<?php
/**
 * User: Script
 * Date: 07.10.2018
 * Time: 9:10
 */

namespace PHPDesignPatterns\Creational\AbstractFactory\DoorFitting;


use PHPDesignPatterns\Creational\AbstractFactory\DoorFitting\Doors\Door;
use PHPDesignPatterns\Creational\AbstractFactory\DoorFitting\Doors\WoodenDoor;
use PHPDesignPatterns\Creational\AbstractFactory\DoorFitting\Experts\Carpenter;
use PHPDesignPatterns\Creational\AbstractFactory\DoorFitting\Experts\DoorFittingExpert;

class WoodenDoorFactory implements DoorFactory
{
    /**
     * @return Door
     */
    public function makeDoor(): Door
    {
        return new WoodenDoor();
    }

    /**
     * @return DoorFittingExpert
     */
    public function makeFittingExpert(): DoorFittingExpert
    {
        return new Carpenter();
    }

}