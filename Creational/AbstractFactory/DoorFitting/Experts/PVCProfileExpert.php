<?php
/**
 * User: Script
 * Date: 07.10.2018
 * Time: 9:14
 */

namespace PHPDesignPatterns\Creational\AbstractFactory\DoorFitting\Experts;

/**
 * Class PVCProfileExpert
 * @package PHPDesignPatterns\Creational\AbstractFactory\DoorFitting\Experts\
 */
class PVCProfileExpert implements DoorFittingExpert
{
    /**
     * @return string
     */
    public function getDescription(): string
    {
        return 'I can only PVC doors';
    }

}