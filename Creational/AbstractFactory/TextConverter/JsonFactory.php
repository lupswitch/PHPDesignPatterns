<?php
namespace PHPDesignPatterns\Creational\AbstractFactory\TextConverter;

/**
 * Class JsonFactory
 * @package PHPDesignPatterns\Creational\AbstractFactory
 */
class JsonFactory extends AbstractFactory
{
    /**
     * @param string $content
     * @return Text
     */
    public function createText(string $content): Text
    {
        return new JsonText($content);
    }
}
