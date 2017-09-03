<?php
namespace PHPDesignPatterns\Creational\FactoryMethod;

/**
 * Class FactoryMethod
 * @package PHPDesignPatterns\Creational\FactoryMethod
 */
abstract class FactoryMethod
{
    const CHEAP = 'cheap';
    const FAST = 'fast';

    abstract protected function createVehicle(string $type): VehicleInterface;

    /**
     * @param string $type
     * @return VehicleInterface
     */
    public function create(string $type): VehicleInterface
    {
        $obj = $this->createVehicle($type);
        $obj->setColor('black');

        return $obj;
    }
}