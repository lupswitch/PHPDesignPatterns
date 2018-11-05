<?php
/**
 * User: Script
 * Date: 05.11.2018
 * Time: 17:34
 */

namespace PHPDesignPatterns\Behavioral\Visitor\Zoo;


interface  AnimalPlace
{
    public function accept(AnimalOperation $operation);
}