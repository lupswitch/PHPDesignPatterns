<?php
/**
 * User: Script
 * Date: 05.11.2018
 * Time: 17:35
 */

namespace PHPDesignPatterns\Behavioral\Visitor\Zoo;


interface AnimalOperation
{
    public function visitMonkey(MonkeyPlace $monkey);
    public function visitLion(LionPlace $lion);
    public function visitDolphin(DolphinPlace $dolphin);
}