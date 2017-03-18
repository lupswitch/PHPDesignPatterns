<?php
/**
 * Created by PhpStorm.
 * User: Script
 * Date: 26.02.2017
 * Time: 17:21
 */

namespace PHPDesignPatterns\Creational\Builder;


use PHPDesignPatterns\Creational\Builder\Parts\Vehicle;

class TruckBuilder implements BuilderInterface
{
    /**
     * @var Parts\Truck
     */
    private $truck;

    /**
     * Create Vehicle object
     */
    public function createVehicle()
    {
        $this->truck = new Parts\Truck();
    }


    /**
     * Add wheel to truck
     */
    public function addWheel()
    {
        $this->truck->setPart('wheel1', new Parts\Wheel());
        $this->truck->setPart('wheel2', new Parts\Wheel());
        $this->truck->setPart('wheel3', new Parts\Wheel());
        $this->truck->setPart('wheel4', new Parts\Wheel());
        $this->truck->setPart('wheel5', new Parts\Wheel());
        $this->truck->setPart('wheel6', new Parts\Wheel());
    }


    /**
     * Add engine to truck
     */
    public function addEngine()
    {
        $this->truck->setPart('truckEngine', new Parts\Engine());
    }


    /**
     * Add doors to truck
     */
    public function addDoors()
    {
        $this->truck->setPart('rightDoor', new Parts\Door());
        $this->truck->setPart('leftDoor', new Parts\Door());
    }

    /**
     * @return Vehicle
     */
    public function getVehicle() : Vehicle
    {
        return $this->truck;
    }
}