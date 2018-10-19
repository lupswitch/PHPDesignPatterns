<?php
/**
 * User: Script
 * Date: 19.10.2018
 * Time: 6:24
 */

namespace PHPDesignPatterns\Structural\Facade\Computer\Tests;

use PHPDesignPatterns\Structural\Facade\Computer\Computer;
use PHPDesignPatterns\Structural\Facade\Computer\ComputerFacade;
use PHPUnit\Framework\TestCase;
class ComputerFacadeTest extends TestCase
{
    public function testComputerOn()
    {
        $computer = new ComputerFacade(new Computer());
        ob_start();
        $computer->turnOn();
        $result = ob_get_clean();
        $this->assertEquals('Ouch!'.PHP_EOL.'Beep beep!'.PHP_EOL.'Loading...'.PHP_EOL.'Ready to be used!'.PHP_EOL, $result);
    }

    public function testComputerOff()
    {
        $computer = new ComputerFacade(new Computer());
        ob_start();
        $computer->turnOff();
        $result = ob_get_clean();
        $this->assertEquals("Bup bup bup buzzzz!".PHP_EOL."Haaah!".PHP_EOL.'Zzzzz'.PHP_EOL, $result);
    }
}