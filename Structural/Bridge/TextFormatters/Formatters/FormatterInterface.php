<?php
/**
 * User: Script
 * Date: 26.11.2017
 * Time: 19:48
 */

namespace PHPDesignPatterns\Structural\Bridge\TextFormatters\Formatters;


interface FormatterInterface
{
    public function format(string $text);
}