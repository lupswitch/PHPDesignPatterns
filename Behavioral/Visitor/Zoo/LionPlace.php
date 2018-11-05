<?php
/**
 * User: Script
 * Date: 05.11.2018
 * Time: 17:49
 */

namespace PHPDesignPatterns\Behavioral\Visitor\Zoo;


class LionPlace implements AnimalPlace
{
    public function roar()
    {
        return 'Roaaar!';
    }

    public function accept(AnimalOperation $operation)
    {
        $operation->visitLion($this);
    }
}