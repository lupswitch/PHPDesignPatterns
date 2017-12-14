<?php
/**
 * User: Script
 * Date: 26.11.2017
 * Time: 20:10
 */

namespace PHPDesignPatterns\Structural\Bridge\Formatters;


class JsonFormatter implements FormatterInterface
{
    public function format(string $text)
    {
        return json_encode($text);
    }
}