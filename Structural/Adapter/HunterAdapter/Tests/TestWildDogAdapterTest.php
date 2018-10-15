<?php
/**
 * User: Script
 * Date: 15.10.2018
 * Time: 11:09
 */

namespace PHPDesignPatterns\Structural\Adapter\HunterAdapter\Tests;

use PHPDesignPatterns\Structural\Adapter\HunterAdapter\Hunter;
use PHPDesignPatterns\Structural\Adapter\HunterAdapter\WildDog;
use PHPDesignPatterns\Structural\Adapter\HunterAdapter\WildDogAdapter;
use PHPUnit\Framework\TestCase;
use SebastianBergmann\CodeCoverage\Report\PHP;

class TestWildDogAdapterTest extends TestCase
{
    /**
     * Test hunter
     */
    public function testWildDogAdapter()
    {
        $wildDog = new WildDog();
        $wildDogAdapter = new WildDogAdapter($wildDog);

        $hunter = new Hunter();
        $this->assertEquals(true, $hunter->hunt($wildDogAdapter));
    }
}