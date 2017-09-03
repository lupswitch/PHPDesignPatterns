<?php
/**
 * User: Script
 * Date: 26.02.2017
 * Time: 19:45
 */

namespace PHPDesignPatterns\Creational\FactoryMethod;


class CarMercedes implements  VehicleInterface
{
    /**
     * @var string
     */
    private $color;

    public function setColor(string $rgb)
    {
        $this->color = $rgb;
    }

    public function addAMGTuning()
    {
        // do additional tuning here
    }
}