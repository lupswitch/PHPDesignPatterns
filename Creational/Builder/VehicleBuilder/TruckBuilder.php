<?php
namespace PHPDesignPatterns\Creational\Builder\VehicleBuilder;

use PHPDesignPatterns\Creational\Builder\Vehicles\Truck;
use PHPDesignPatterns\Creational\Builder\Vehicles\Vehicle;

class TruckBuilder implements BuilderInterface
{
    /**
     * @var Vehicles\Truck
     */
    private $truck;

    /**
     * Create Vehicle object
     */
    public function createVehicle()
    {
        $this->truck = new Truck();
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
