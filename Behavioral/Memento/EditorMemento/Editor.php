<?php
/**
 * User: Script
 * Date: 01.11.2018
 * Time: 6:43
 */

namespace PHPDesignPatterns\Behavioral\Memento\EditorMemento;


class Editor
{
    protected $content = '';

    public function type(string $words)
    {
        $this->content = $this->content . ' ' . $words;
    }

    public function getContent()
    {
        return trim($this->content);
    }

    public function save()
    {
        return new EditorMemento($this->content);
    }

    public function restore(EditorMemento $memento)
    {
        $this->content = $memento->getContent();
    }
}