<?php
/**
 * User: Script
 * Date: 07.10.2018
 * Time: 8:52
 */

namespace PHPDesignPatterns\Creational\AbstractFactory\DoorFitting\Experts;

/**
 * Class Carpenter
 * @package PHPDesignPatterns\Creational\AbstractFactory\DoorFitting\Experts
 */
class Carpenter implements DoorFittingExpert
{
    /**
     * @return string
     */
    public function getDescription(): string
    {
        return 'I can only fit wooden doors';
    }

}