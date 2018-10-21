<?php
/**
 * User: Script
 * Date: 07.10.2018
 * Time: 9:20
 */

namespace PHPDesignPatterns\Creational\AbstractFactory\DoorFitting;


use PHPDesignPatterns\Creational\AbstractFactory\DoorFitting\Doors\Door;
use PHPDesignPatterns\Creational\AbstractFactory\DoorFitting\Doors\PlasticDoor;
use PHPDesignPatterns\Creational\AbstractFactory\DoorFitting\Experts\DoorFittingExpert;
use PHPDesignPatterns\Creational\AbstractFactory\DoorFitting\Experts\PVCProfileExpert;

/**
 * Class PVCDoorFactory
 * @package PHPDesignPatterns\Creational\AbstractFactory\DoorFitting
 */
class PVCDoorFactory implements DoorFactory
{
    /**
     * Make door object
     * @return Door
     */
    public function makeDoor(): Door
    {
        return new PlasticDoor();
    }

    /**
     * Make expert object
     * @return DoorFittingExpert
     */
    public function makeFittingExpert(): DoorFittingExpert
    {
        return new PVCProfileExpert();
    }

}