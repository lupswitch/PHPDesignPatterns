<?php
/**
 * User: Script
 * Date: 20.12.2017
 * Time: 9:55
 */

namespace PHPDesignPatterns\Structural\Decorator\RendererDecorator;


interface RenderableInterface
{
    public function renderData(): string;
}