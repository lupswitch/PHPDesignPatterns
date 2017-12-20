<?php
/**
 * User: Script
 * Date: 20.12.2017
 * Time: 9:56
 */

namespace PHPDesignPatterns\Structural\Decorator\RendererDecorator;


abstract class RendererDecorator implements RenderableInterface
{
    /**
     * @var RenderableInterface
     */
    protected $wrapped;

    public function __construct(RenderableInterface $renderer)
    {
        $this->wrapped = $renderer;
    }
}