<?php
/**
 * Created by PhpStorm.
 * User: Script
 * Date: 26.02.2017
 * Time: 15:51
 */

namespace PHPDesignPatterns\Creational\Builder;

use PHPDesignPatterns\Creational\Builder\Parts\Vehicle;

interface BuilderInterface
{
    public function createVehicle();

    public function addWheel();

    public function addEngine();

    public function addDoors();

    public function getVehicle(): Vehicle;
}