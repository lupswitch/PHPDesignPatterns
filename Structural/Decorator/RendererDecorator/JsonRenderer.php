<?php
/**
 * User: Script
 * Date: 20.12.2017
 * Time: 10:04
 */

namespace PHPDesignPatterns\Structural\Decorator\RendererDecorator;


class JsonRenderer extends RendererDecorator
{
    public function renderData(): string
    {
        return json_encode($this->wrapped->renderData());
    }
}