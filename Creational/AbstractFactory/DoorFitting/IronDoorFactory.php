<?php
/**
 * User: Script
 * Date: 07.10.2018
 * Time: 9:15
 */

namespace PHPDesignPatterns\Creational\AbstractFactory\DoorFitting;


use PHPDesignPatterns\Creational\AbstractFactory\DoorFitting\Doors\Door;
use PHPDesignPatterns\Creational\AbstractFactory\DoorFitting\Doors\IronDoor;
use PHPDesignPatterns\Creational\AbstractFactory\DoorFitting\Experts\DoorFittingExpert;
use PHPDesignPatterns\Creational\AbstractFactory\DoorFitting\Experts\Welder;


class IronDoorFactory implements DoorFactory
{
    public function makeDoor(): Door
    {
        return new IronDoor();
    }

    public function makeFittingExpert(): DoorFittingExpert
    {
        return new Welder();
    }
}