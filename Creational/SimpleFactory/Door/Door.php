<?php
/**
 * User: Script
 * Date: 06.10.2018
 * Time: 7:38
 */

namespace PHPDesignPatterns\Creational\SimpleFactory\Door;


interface Door
{
    public function getWidth(): float;
    public function getHeight(): float;
}