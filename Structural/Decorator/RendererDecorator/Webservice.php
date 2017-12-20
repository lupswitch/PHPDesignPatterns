<?php
/**
 * User: Script
 * Date: 20.12.2017
 * Time: 9:55
 */

namespace PHPDesignPatterns\Structural\Decorator\RendererDecorator;


class Webservice implements RenderableInterface
{
    /**
     * @var string
     */
    private $data;

    public function __construct(string $data)
    {
        $this->data = $data;
    }

    public function renderData(): string
    {
        return $this->data;
    }
}