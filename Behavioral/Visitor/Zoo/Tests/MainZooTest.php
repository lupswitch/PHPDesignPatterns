<?php
/**
 * User: Script
 * Date: 05.11.2018
 * Time: 17:51
 */

namespace PHPDesignPatterns\Behavioral\Visitor\Zoo\Tests;


use PHPDesignPatterns\Behavioral\Visitor\Zoo\DolphinPlace;
use PHPDesignPatterns\Behavioral\Visitor\Zoo\LionPlace;
use PHPDesignPatterns\Behavioral\Visitor\Zoo\MonkeyPlace;
use PHPDesignPatterns\Behavioral\Visitor\Zoo\Speak;
use PHPUnit\Framework\TestCase;

class MainZooTest extends TestCase
{
    public function testRun()
    {
        $monkey = new MonkeyPlace();
        $lion = new LionPlace();
        $dolphin = new DolphinPlace();

        $speak = new Speak();

        $this->assertEquals($monkey->shout(), $monkey->accept($speak));
        $this->assertEquals($lion->roar(), $lion->accept($speak));
        $this->assertEquals($dolphin->speak(), $dolphin->accept($speak));
    }
}