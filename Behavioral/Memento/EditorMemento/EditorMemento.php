<?php
/**
 * User: Script
 * Date: 01.11.2018
 * Time: 6:43
 */

namespace PHPDesignPatterns\Behavioral\Memento\EditorMemento;


class EditorMemento
{
    protected $content;

    public function __construct(string $content)
    {
        $this->content = $content;
    }

    public function getContent()
    {
        return $this->content;
    }
}