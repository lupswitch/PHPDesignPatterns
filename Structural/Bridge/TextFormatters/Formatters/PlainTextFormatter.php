<?php
/**
 * User: Script
 * Date: 26.11.2017
 * Time: 19:49
 */

namespace PHPDesignPatterns\Structural\Bridge\TextFormatters\Formatters;


class PlainTextFormatter implements FormatterInterface
{
    public function format(string $text)
    {
        return $text;
    }
}