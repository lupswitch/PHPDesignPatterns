<?php
/**
 * User: Script
 * Date: 07.10.2018
 * Time: 8:40
 */

namespace PHPDesignPatterns\Creational\AbstractFactory\DoorFitting\Doors;

/**
 * Class PlasticDoor
 * @package PHPDesignPatterns\Creational\AbstractFactory\DoorFitting\Doors
 */
class PlasticDoor implements Door
{
    /**
     * @return string
     */
    public function getDescription(): string
    {
        return 'I am a plastic door';
    }

}