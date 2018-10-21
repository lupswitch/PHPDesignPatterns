<?php
/**
 * Created by PhpStorm.
 * User: chastener
 * Date: 14.10.2018
 * Time: 19:39
 */

namespace PHPDesignPatterns\Creational\Singleton\President\Tests;

use PHPDesignPatterns\Creational\Singleton\President\President;
use \PHPUnit\Framework\TestCase;
use SebastianBergmann\CodeCoverage\Report\PHP;

class PresidentSingeltonTest extends TestCase
{
    public function testPresidentSingelton()
    {

        $president1 = President::getInstance();
        $president2 = President::getInstance();

        $this->assertSame($president1, $president2);
    }
}