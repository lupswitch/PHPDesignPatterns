<?php
namespace PHPDesignPatterns\Creational\AbstractFactory;

/**
 * Class HtmlFactory
 * @package PHPDesignPatterns\Creational\AbstractFactory
 */
class HtmlFactory extends AbstractFactory
{
    /**
     * @param string $content
     * @return Text
     */
    public function createText(string $content): Text
    {
        return new HtmlText($content);
    }
}
