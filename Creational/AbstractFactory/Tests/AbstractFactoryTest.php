<?php
/**
 * Created by PhpStorm.
 * User: Script
 * Date: 26.02.2017
 * Time: 15:03
 */

namespace PHPDesignPatterns\Creational\AbstractFactory;

use PHPDesignPatterns\Creational\AbstractFactory\HtmlFactory;
use PHPDesignPatterns\Creational\AbstractFactory\JsonFactory;


class AbstractFactoryTest extends \PHPUnit_Framework_TestCase
{
    public function testCanCreateHtmlText()
    {
        $factory = new HtmlFactory();
        $text = $factory->createText('foobar');

        $this->assertInstanceOf('PHPDesignPatterns\Creational\AbstractFactory\HtmlText', $text);
    }

    public function testCanCreateJsonText()
    {
        $factory = new JsonFactory();
        $text = $factory->createText('foobar');

        $this->assertInstanceOf('PHPDesignPatterns\Creational\AbstractFactory\JsonText', $text);
    }

    public function testCanCreateXmlText()
    {
        $factory = new XmlFactory();
        $text = $factory->createText('foobar');

        $this->assertInstanceOf('PHPDesignPatterns\Creational\AbstractFactory\JsonText', $text);
    }
}