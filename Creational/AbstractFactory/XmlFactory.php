<?php
/**
 * Created by PhpStorm.
 * User: Script
 * Date: 26.02.2017
 * Time: 19:28
 */

namespace PHPDesignPatterns\Creational\AbstractFactory;


class XmlFactory extends AbstractFactory
{
    public function createText(string $content): Text
    {
        return new XmlText($content);
    }

}