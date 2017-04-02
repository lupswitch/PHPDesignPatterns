<?php
namespace PHPDesignPatterns\Creational\Builder;

use PHPDesignPatterns\Creational\Builder\Vehicles\Car;
use PHPDesignPatterns\Creational\Builder\Vehicles\Vehicle;

/**
 * Class CarBuilder
 * @package PHPDesignPatterns\Creational\Builder
 */
class CarBuilder implements BuilderInterface
{
    /**
     * @var Car
     */
    private $car;

    /**
     * Create car object
     */
    public function createVehicle()
    {
        $this->car = new Car();
    }


    /**
     * Method add wheels
     */
    public function addWheel()
    {
        $this->car->setPart('rightDoor', new Parts\Door());
        $this->car->setPart('leftDoor', new Parts\Door());
        $this->car->setPart('trunkLid', new Parts\Door());
    }


    /**
     * Method add engine
     */
    public function addEngine()
    {
        $this->car->setPart('engine', new Parts\Engine());
    }


    /**
     * Method add doors
     */
    public function addDoors()
    {
        $this->car->setPart('wheelLF', new Parts\Wheel());
        $this->car->setPart('wheelRF', new Parts\Wheel());
        $this->car->setPart('wheelLR', new Parts\Wheel());
        $this->car->setPart('wheelRR', new Parts\Wheel());
    }


    /**
     * @return Vehicle
     */
    public function getVehicle(): Vehicle
    {
        return $this->car;
    }
}
