<?php
/**
 * User: Script
 * Date: 26.11.2017
 * Time: 19:51
 */

namespace PHPDesignPatterns\Structural\Bridge\TextFormatters\Formatters;


class HtmlFormatter implements FormatterInterface
{

    public function format(string $text)
    {
        return sprintf('<p>%s</p>', $text);
    }
}