<?php
/**
 * User: Script
 * Date: 20.10.2018
 * Time: 7:54
 */

namespace PHPDesignPatterns\Structural\Proxy\Doors;


class LabDoor implements Door
{
    public function open()
    {
        return true; // "Opening lab door"
    }

    public function close()
    {
        return true;  // "Closing the lab door";
    }
}