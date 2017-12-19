<?php
namespace PHPDesignPatterns\Creational\AbstractFactory\TextConverter;

/**
 * Class XmlFactory
 * @package PHPDesignPatterns\Creational\AbstractFactory
 */
class XmlFactory extends AbstractFactory
{
    /**
     * @param string $content
     * @return Text
     */
    public function createText(string $content): Text
    {
        return new XmlText($content);
    }
}
