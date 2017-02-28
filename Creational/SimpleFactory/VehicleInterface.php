<?php
/**
 * Created by PhpStorm.
 * User: Script
 * Date: 26.02.2017
 * Time: 18:05
 */

namespace PHPDesignPatterns\Creational\SimpleFactory;


interface VehicleInterface
{
    public function driveTo (string $destination);
}