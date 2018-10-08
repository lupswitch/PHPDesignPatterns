<?php
/**
 * User: Script
 * Date: 07.10.2018
 * Time: 8:38
 */

namespace PHPDesignPatterns\Creational\AbstractFactory\DoorFitting\Doors;

/**
 * Interface Door
 * @package PHPDesignPatterns\Creational\AbstractFactory\DoorFitting\Doors
 */
interface Door
{
    /**
     * @return string
     */
    public function getDescription(): string;
}