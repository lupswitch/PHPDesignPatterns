<?php
/**
 * Created by PhpStorm.
 * User: chastener
 * Date: 24.10.2018
 * Time: 17:52
 */

namespace PHPDesignPatterns\Behavioral\Command\BulbControl\Tests;

use PHPDesignPatterns\Behavioral\Command\BulbControl\Bulb;
use PHPDesignPatterns\Behavioral\Command\BulbControl\RemoteControl;
use PHPDesignPatterns\Behavioral\Command\BulbControl\TurnOff;
use PHPDesignPatterns\Behavioral\Command\BulbControl\TurnOn;
use PHPUnit\Framework\TestCase;

class BulbControlTest extends TestCase
{
    public function testMain()
    {
        $bulb = new Bulb();

        $turnOn = new TurnOn($bulb);
        $turnOff = new TurnOff($bulb);

        $remote = new RemoteControl();
        $remote->submit($turnOn); // Лампочка зажглась!
        $remote->submit($turnOff); // Темнота!
    }
}