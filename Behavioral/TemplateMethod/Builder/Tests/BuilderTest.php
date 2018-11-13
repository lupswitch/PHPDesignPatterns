<?php
/**
 * User: Script
 * Date: 13.11.2018
 * Time: 5:59
 */

namespace PHPDesignPatterns\Behavioral\TemplateMethod\Builder\Tests;


use PHPDesignPatterns\Behavioral\TemplateMethod\Builder\AndroidBuilder;
use PHPDesignPatterns\Behavioral\TemplateMethod\Builder\IosBuilder;
use PHPUnit\Framework\TestCase;

class BuilderTest extends TestCase
{
    public function testAndroidBuilder()
    {
        $androidBuilder = new AndroidBuilder();
        $androidBuilder->build();

        $this->assertEquals(4, count($androidBuilder->getBuildResult()));
    }

    public function testIosBuilder()
    {
        $iosBuilder = new IosBuilder();
        $iosBuilder->build();

        $this->assertEquals(4, count($iosBuilder->getBuildResult()));
        $this->assertEquals('Deploying ios build to server', $iosBuilder->getBuildResult()[3]);
    }
}