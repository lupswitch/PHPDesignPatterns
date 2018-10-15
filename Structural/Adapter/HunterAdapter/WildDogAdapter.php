<?php
/**
 * User: Script
 * Date: 15.10.2018
 * Time: 11:05
 */

namespace PHPDesignPatterns\Structural\Adapter\HunterAdapter;


class WildDogAdapter implements Lion
{
    protected $dog;

    public function __construct(WildDog $dog)
    {
        $this->dog = $dog;
    }

    public function roar()
    {
        $this->dog->bark();
    }
}