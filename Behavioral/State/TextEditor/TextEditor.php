<?php
/**
 * User: Script
 * Date: 07.11.2018
 * Time: 7:50
 */

namespace PHPDesignPatterns\Behavioral\State\TextEditor;


class TextEditor
{
    protected $state;

    public function __construct(WritingState $state)
    {
        $this->state = $state;
    }

    public function setState(WritingState $state)
    {
        $this->state = $state;
    }

    public function type(string $words)
    {
        $this->state->write($words);
    }
}