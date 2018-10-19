<?php
/**
 * User: Script
 * Date: 19.10.2018
 * Time: 6:22
 */

namespace PHPDesignPatterns\Structural\Facade\Computer;

class Computer
{
    public function getElectricShock()
    {
        echo "Ouch!".PHP_EOL;
    }

    public function makeSound()
    {
        echo "Beep beep!".PHP_EOL;
    }

    public function showLoadingScreen()
    {
        echo "Loading...".PHP_EOL;
    }

    public function bam()
    {
        echo "Ready to be used!".PHP_EOL;
    }

    public function closeEverything()
    {
        echo "Bup bup bup buzzzz!".PHP_EOL;
    }

    public function sooth()
    {
        echo "Zzzzz".PHP_EOL;
    }

    public function pullCurrent()
    {
        echo "Haaah!".PHP_EOL;
    }
}