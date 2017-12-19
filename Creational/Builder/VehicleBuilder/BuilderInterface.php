<?php
namespace PHPDesignPatterns\Creational\Builder\VehicleBuilder;

use PHPDesignPatterns\Creational\Builder\VehicleBuilder\Vehicles\Vehicle;

/**
 * Interface BuilderInterface
 * @package PHPDesignPatterns\Creational\Builder
 */
interface BuilderInterface
{
    public function createVehicle();

    public function addWheel();

    public function addEngine();

    public function addDoors();

    public function getVehicle(): Vehicle;
}
