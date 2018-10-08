<?php
/**
 * User: Script
 * Date: 07.10.2018
 * Time: 8:51
 */

namespace PHPDesignPatterns\Creational\AbstractFactory\DoorFitting\Experts;

/**
 * Class Welder
 * @package PHPDesignPatterns\Creational\AbstractFactory\DoorFitting\Experts
 */
class Welder implements DoorFittingExpert
{
    /**
     * @return string
     */
    public function getDescription(): string
    {
        return 'I can only fit iron doors';
    }
}