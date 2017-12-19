<?php
namespace PHPDesignPatterns\Creational\AbstractFactory\TextConverter;

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
        echo __METHOD__.PHP_EOL;
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
     * Test create XML factory
     */
    public function testCanCreateXmlText()
    {
        $factory = new XmlFactory();
        $text = $factory->createText('foobar');

        $this->assertInstanceOf(XmlText::class, $text);
    }
}