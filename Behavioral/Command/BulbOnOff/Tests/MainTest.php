<?php
/**
 * User: Script
 * Date: 28.10.2018
 * Time: 18:49
 */

namespace PHPDesignPatterns\Behavioral\Command\BulbOnOff\Tests;



use PHPDesignPatterns\Behavioral\Command\BulbOnOff\Bulb;
use PHPDesignPatterns\Behavioral\Command\BulbOnOff\RemoteControl;
use PHPDesignPatterns\Behavioral\Command\BulbOnOff\TurnOff;
use PHPDesignPatterns\Behavioral\Command\BulbOnOff\TurnOn;
use PHPUnit\Framework\TestCase;

class MainTest extends TestCase
{
    public function testRun ()
    {
        $bulb = new Bulb();

        $turnOn = new TurnOn($bulb);
        $turnOff = new TurnOff($bulb);

        $remote = new RemoteControl();
        $remote->submit($turnOn); // Лампочка зажглась!

        $this->assertEquals(true, $bulb->isLight());

        $remote->submit($turnOff); // Темнота!

        $this->assertEquals(false, $bulb->isLight());
    }
}