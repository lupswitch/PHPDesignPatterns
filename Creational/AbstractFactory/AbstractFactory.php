<?php
namespace PHPDesignPatterns\Creational\AbstractFactory;

/**
 * Class AbstractFactory
 * @package PHPDesignPatterns\Creational\AbstractFactory
 */
abstract class AbstractFactory
{
    /**
     * Create text object
     * @param string $content
     * @return Text
     */
    abstract public function createText(string $content): Text;
}
