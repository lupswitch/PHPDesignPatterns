<?php
namespace PHPDesignPatterns\Creational\Builder;

use PHPDesignPatterns\Creational\Builder\Vehicles\Vehicle;

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
