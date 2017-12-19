<?php
/**
 * User: Script
 * Date: 26.02.2017
 * Time: 19:50
 */

namespace PHPDesignPatterns\Creational\FactoryMethod\CreateVehicle;


class CarSubaru implements VehicleInterface
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

    /**
     * Add STI tuning
     */
    public function addSTITuning()
    {
        // TODO
    }
}