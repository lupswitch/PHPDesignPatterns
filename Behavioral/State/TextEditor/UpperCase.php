<?php
/**
 * User: Script
 * Date: 07.11.2018
 * Time: 7:48
 */

namespace PHPDesignPatterns\Behavioral\State\TextEditor;


class UpperCase implements WritingState
{
    public function write(string $words)
    {
        echo strtoupper($words);
    }
}