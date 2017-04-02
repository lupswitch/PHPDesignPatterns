<?php
namespace PHPDesignPatterns\Creational\Builder;

use PHPDesignPatterns\Creational\Builder\Vehicles\Vehicle;

/**
 * Class Director
 * @package PHPDesignPatterns\Creational\Builder
 */
class Director
{
    /**
     * @param BuilderInterface $builder
     * @return Vehicle
     */
    public function build(BuilderInterface $builder) : Vehicle
    {
        $builder->createVehicle();
        $builder->addDoors();
        $builder->addEngine();
        $builder->addWheel();

        return $builder->getVehicle();
    }
}
