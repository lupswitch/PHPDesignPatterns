<?php
/**
 * User: Script
 * Date: 07.11.2018
 * Time: 7:50
 */

namespace PHPDesignPatterns\State\TextEditor\Tests;


use PHPDesignPatterns\Behavioral\State\TextEditor\DefaultCase;
use PHPDesignPatterns\Behavioral\State\TextEditor\LowerCase;
use PHPDesignPatterns\Behavioral\State\TextEditor\TextEditor;
use PHPDesignPatterns\Behavioral\State\TextEditor\UpperCase;
use PHPUnit\Framework\TestCase;

class TextEditorTest extends TestCase
{
    protected $editor;

    protected function setUp()
    {
        $this->editor = new TextEditor(new DefaultCase());
    }
    public function testDefaultCase()
    {
        $this->expectOutputString('First line');
        $this->editor->type('First line');

    }

    public function testUperCase()
    {
        $this->editor->setState(new UpperCase());

        $this->expectOutputString('SECOND LINE');
        $this->editor->type('Second line');

    }

    public function testLowerCase()
    {
        $this->editor->setState(new LowerCase());

        $this->expectOutputString('third line');
        $this->editor->type('Third line');
    }
}