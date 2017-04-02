<?php
namespace PHPDesignPatterns\Creational\AbstractFactory;

/**
 * Class AbstractFactoryTest
 * @package PHPDesignPatterns\Creational\AbstractFactory
 */
class AbstractFactoryTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test create HTML factory
     */
    public function testCanCreateHtmlText()
    {
        $factory = new HtmlFactory();
        $text = $factory->createText('foobar');

        $this->assertInstanceOf(HtmlText::class, $text);
    }


    /**
     * Test create Json factory
     */
    public function testCanCreateJsonText()
    {
        $factory = new JsonFactory();
        $text = $factory->createText('foobar');

        $this->assertInstanceOf(JsonText::class, $text);
    }


    /**
     * Tesct create XML factory
     */
    public function testCanCreateXmlText()
    {
        $factory = new XmlFactory();
        $text = $factory->createText('foobar');

        $this->assertInstanceOf(XmlText::class, $text);
    }
}