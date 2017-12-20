<?php
/**
 * User: Script
 * Date: 20.12.2017
 * Time: 6:53
 */

namespace PHPDesignPatterns\Structural\Composite\FormRender\Elements;


use PHPDesignPatterns\Structural\Composite\FormRender\RenderableInterface;

class InputElement implements RenderableInterface
{

    public function render(): string
    {
        return '<input type="text" />';
    }
}