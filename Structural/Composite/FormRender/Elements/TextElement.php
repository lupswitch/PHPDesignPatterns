<?php
/**
 * User: Script
 * Date: 20.12.2017
 * Time: 7:05
 */

namespace PHPDesignPatterns\Structural\Composite\FormRender\Elements;


use PHPDesignPatterns\Structural\Composite\FormRender\RenderableInterface;

class TextElement implements RenderableInterface
{
    private $text;

    public function __construct(string $text)
    {
        $this->text = $text;
    }

    public function render(): string
    {
        return $this->text;
    }
}