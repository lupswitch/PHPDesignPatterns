<?php
/**
 * User: Script
 * Date: 05.11.2018
 * Time: 17:49
 */

namespace PHPDesignPatterns\Behavioral\Visitor\Zoo;


class DolphinPlace implements AnimalPlace
{
    public function speak()
    {
        return  'Tuut tuttu tuutt!';
    }

    public function accept(AnimalOperation $operation)
    {
        return $operation->visitDolphin($this);
    }
}