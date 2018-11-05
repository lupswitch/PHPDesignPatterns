<?php
/**
 * User: Script
 * Date: 05.11.2018
 * Time: 17:36
 */

namespace PHPDesignPatterns\Behavioral\Visitor\Zoo;


class MonkeyPlace implements AnimalPlace
{
    public function shout()
    {
        return 'Ooh oo aa aa!';
    }

    public function accept(AnimalOperation $operation)
    {
        return $operation->visitMonkey($this);
    }
}