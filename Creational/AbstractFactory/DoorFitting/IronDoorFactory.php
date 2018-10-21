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

/**
 * Class IronDoorFactory
 * @package PHPDesignPatterns\Creational\AbstractFactory\DoorFitting
 */
class IronDoorFactory implements DoorFactory
{
    /**
     * @return Door
     */
    public function makeDoor(): Door
    {
        return new IronDoor();
    }

    /**
     * @return DoorFittingExpert
     */
    public function makeFittingExpert(): DoorFittingExpert
    {
        return new Welder();
    }
}