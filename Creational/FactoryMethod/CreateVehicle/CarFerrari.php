<?php
namespace PHPDesignPatterns\Creational\FactoryMethod\CreateVehicle;

/**
 * Class CarFerrari
 * @package PHPDesignPatterns\Creational\FactoryMethod
 */
class CarFerrari implements VehicleInterface
{
    /**
     * @var string
     */
    private $color;

    /**
     * Setter for color
     * @param string $rgb
     */
    public function setColor(string $rgb)
    {
        $this->color = $rgb;
    }
}