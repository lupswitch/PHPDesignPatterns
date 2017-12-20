<?php
/**
 * User: Script
 * Date: 20.12.2017
 * Time: 10:06
 */

namespace PHPDesignPatterns\Structural\Decorator\RendererDecorator\Tests;


use PHPDesignPatterns\Structural\Decorator\RendererDecorator\JsonRenderer;
use PHPDesignPatterns\Structural\Decorator\RendererDecorator\Webservice;
use PHPDesignPatterns\Structural\Decorator\RendererDecorator\XmlRenderer;
use PHPUnit\Framework\TestCase;


/**
 * Class DecoratorTest
 * @package PHPDesignPatterns\Structural\Decorator\RendererDecorator\Tests
 */
class DecoratorTest extends TestCase
{
    private $service;

    protected function setUp()
    {
        $this->service = new Webservice('foobar');
    }

    public function testJsonDecorator()
    {
        $service = new JsonRenderer($this->service);

        $this->assertEquals('"foobar"', $service->renderData());
    }

    public function testXmlDecorator()
    {
        $service = new XmlRenderer($this->service);

        $this->assertXmlStringEqualsXmlString('<?xml version="1.0"?><content>foobar</content>', $service->renderData());
    }
}