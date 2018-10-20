<?php
/**
 * User: Script
 * Date: 20.10.2018
 * Time: 7:12
 */

namespace PHPDesignPatterns\Structural\Flyweight\TeaShop;


class TeaMaker
{
    protected $availableTea = [];

    public function make($preference)
    {
        if (empty($this->availableTea[$preference])) {
            $this->availableTea[$preference] = new KarakTea();
        }

        return $this->availableTea[$preference];
    }
}