<?php
/**
 * User: Script
 * Date: 15.10.2018
 * Time: 11:03
 */

namespace PHPDesignPatterns\Structural\Adapter\HunterAdapter;


class Hunter
{
    public function hunt(Lion $lion)
    {
        return true;
    }
}