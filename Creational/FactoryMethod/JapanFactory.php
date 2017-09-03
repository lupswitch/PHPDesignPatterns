<?php
namespace PHPDesignPatterns\Creational\FactoryMethod;

/**
 * Class JapanFactory
 * @package PHPDesignPatterns\Creational\FactoryMethod
 */
class JapanFactory extends FactoryMethod
{
    /**
     * @param string $type
     * @return VehicleInterface
     */
    protected function createVehicle(string $type): VehicleInterface
    {
        switch ($type) {
            case parent::CHEAP:
                return new Bicycle();
            case parent::FAST:
                $carSubaru =  new CarSubaru();
                $carSubaru->addSTITuning();

                return $carSubaru;
            default:
                throw new \InvalidArgumentException("$type is not a valid vehicle");
        }
    }
}