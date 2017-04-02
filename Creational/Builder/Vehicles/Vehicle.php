<?php
namespace PHPDesignPatterns\Creational\Builder\Vehicles;

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
    public function setPart($key, $value)
    {
        $this->data[$key] = $value;
    }
}
