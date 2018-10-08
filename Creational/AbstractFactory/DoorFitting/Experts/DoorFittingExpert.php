<?php
/**
 * User: Script
 * Date: 07.10.2018
 * Time: 8:43
 */

namespace PHPDesignPatterns\Creational\AbstractFactory\DoorFitting\Experts;

/**
 * Interface DoorFittingExpert
 * @package PHPDesignPatterns\Creational\AbstractFactory\DoorFitting\Experts
 */
interface DoorFittingExpert
{
    /**
     * @return string
     */
    public function getDescription(): string ;
}