<?php
/**
 * User: Script
 * Date: 20.12.2017
 * Time: 5:53
 */

namespace PHPDesignPatterns\Creational\StaticFactory\Formatter\Tests;


use PHPDesignPatterns\Creational\StaticFactory\Formatter\StaticFactory;
use PHPUnit\Framework\TestCase;

class StaticFactoryTest extends TestCase
{
    public function testCanCreateNumberFormatter()
    {
        $this->assertInstanceOf(
            'PHPDesignPatterns\Creational\StaticFactory\Formatter\FormatNumber',
            StaticFactory::factory('number')
        );
    }

    public function testCanCreateStringFormatter()
    {
        $this->assertInstanceOf(
            'PHPDesignPatterns\Creational\StaticFactory\Formatter\FormatString',
            StaticFactory::factory('string')
        );
    }

    /**
     * @expectedException \InvalidArgumentException
     */
    public function testException()
    {
        StaticFactory::factory('object');
    }
}