<?php
/**
 * User: Script
 * Date: 06.10.2018
 * Time: 7:38
 */

namespace PHPDesignPatterns\Creational\SimpleFactory\Door;


class WoodenDoor implements Door
{
    protected $width;
    protected $height;

    public function __construct(float $width, float $height)
    {
        $this->width = $width;
        $this->height = $height;
    }

    public function getWidth(): float
    {
        return $this->width;
    }

    public function getHeight(): float
    {
        return $this->height;
    }
}