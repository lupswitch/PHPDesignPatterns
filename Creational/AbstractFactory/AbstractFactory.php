<?php
/**
 * Created by PhpStorm.
 * User: Script
 * Date: 26.02.2017
 * Time: 14:39
 */

namespace PHPDesignPatterns\Creational\AbstractFactory;


abstract class AbstractFactory
{
    abstract public function createText(string $content): Text;
}