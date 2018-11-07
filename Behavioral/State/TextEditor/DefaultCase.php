<?php
/**
 * User: Script
 * Date: 07.11.2018
 * Time: 7:49
 */

namespace PHPDesignPatterns\Behavioral\State\TextEditor;


class DefaultCase implements WritingState
{
    public function write(string $words)
    {
        echo $words;
    }
}