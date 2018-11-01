<?php
/**
 * User: Script
 * Date: 01.11.2018
 * Time: 6:44
 */

namespace PHPDesignPatterns\Behavioral\Memento\EditorMemento\Tests;


use PHPDesignPatterns\Behavioral\Memento\EditorMemento\Editor;
use PHPUnit\Framework\TestCase;

class EditorMementoTest extends TestCase
{
    public function testMain()
    {
        $editor = new Editor();

        // Write anything
        $editor->type('This is the first sentence.');
        $editor->type('This is second.');

        // Save state. Content: This is the first sentence. This is second.
        $savedContent = $editor->save();

        // Пишем ещё
        $editor->type('And this is third.');

        $contentTxt = $editor->getContent(); // This is the first sentence. This is second. And this is third.

        $this->assertEquals('This is the first sentence. This is second. And this is third.', $contentTxt);

        // Restory last saved state
        $editor->restore($savedContent);

        $this->assertEquals('This is the first sentence. This is second.', $editor->getContent());
    }
}