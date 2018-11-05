<?php
/**
 * User: Script
 * Date: 05.11.2018
 * Time: 17:50
 */

namespace PHPDesignPatterns\Behavioral\Visitor\Zoo;


class Speak implements AnimalOperation
{
    public function visitMonkey(MonkeyPlace $monkey)
    {
        return $monkey->shout();
    }

    public function visitLion(LionPlace $lion)
    {
        return $lion->roar();
    }

    public function visitDolphin(DolphinPlace $dolphin)
    {
        return $dolphin->speak();
    }
}