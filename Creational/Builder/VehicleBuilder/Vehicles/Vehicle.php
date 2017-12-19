<?php
namespace PHPDesignPatterns\Creational\Builder\VehicleBuilder\Vehicles;

use PHPDesignPatterns\Creational\Builder\VehicleBuilder\Parts\Part;

/**
 * Class Vehicle
 * @package PHPDesignPatterns\Creational\Builder\Vehicles
 */
abstract class Vehicle
{
    /**
     * @var object[]
     */
    private $data = [];

    
    /**
     * @param string $key
     * @param object $value
     */
    public function setPart($key, Part $value)
    {
        $this->data[$key] = $value;
    }
}
