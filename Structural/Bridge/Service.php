<?php
/**
 * User: Script
 * Date: 26.11.2017
 * Time: 19:56
 */
namespace PHPDesignPatterns\Structural\Bridge;

use PHPDesignPatterns\Structural\Bridge\Formatters\FormatterInterface;

abstract class Service
{
    /**
     * @var FormatterInterface
     */
    protected $implementation;

    /**
     * @param FormatterInterface $printer
     */
    public function __construct(FormatterInterface $printer)
    {
        $this->implementation = $printer;
    }

    /**
     * @param FormatterInterface $printer
     */
    public function setImplementation(FormatterInterface $printer)
    {
        $this->implementation = $printer;
    }

    abstract public function get();
}