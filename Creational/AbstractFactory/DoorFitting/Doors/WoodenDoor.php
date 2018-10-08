<?php
/**
 * User: Script
 * Date: 07.10.2018
 * Time: 8:39
 */

namespace PHPDesignPatterns\Creational\AbstractFactory\DoorFitting\Doors;

/**
 * Class WoodenDoor
 * @package PHPDesignPatterns\Creational\AbstractFactory\DoorFitting\Doors
 */
class WoodenDoor implements Door
{
    /**
     * @return string
     */
    public function getDescription(): string
    {
        return 'I am a wooden door';
    }

}