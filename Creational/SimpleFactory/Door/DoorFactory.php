<?php
/**
 * User: Script
 * Date: 06.10.2018
 * Time: 7:52
 */

namespace PHPDesignPatterns\Creational\SimpleFactory\Door;


class DoorFactory
{
    public static function makeDoor($width, $height): Door
    {
        return new WoodenDoor($width, $height);
    }
}