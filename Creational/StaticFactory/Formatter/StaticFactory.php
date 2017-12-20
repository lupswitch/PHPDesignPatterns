<?php
/**
 * User: Script
 * Date: 20.12.2017
 * Time: 5:49
 */
namespace PHPDesignPatterns\Creational\StaticFactory\Formatter;


final class StaticFactory
{
    /**
     * @param string $type
     *
     * @return FormatterInterface
     */
    public static function factory(string $type): FormatterInterface
    {
        if ($type == 'number') {
            return new FormatNumber();
        }

        if ($type == 'string') {
            return new FormatString();
        }

        throw new \InvalidArgumentException('Unknown format given');
    }
}