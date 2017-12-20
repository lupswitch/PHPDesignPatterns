<?php
namespace PHPDesignPatterns\Creational\FactoryMethod\CreateVehicle;

/**
 * Class Bicycle
 * @package PHPDesignPatterns\Creational\FactoryMethod
 */
class Bicycle implements VehicleInterface
{
    /**
     * @var string
     */
    private $color;

    /**
     * @param string $rgb
     */
    public function setColor(string $rgb)
    {
        $this->color = $rgb;
    }
}
