<?php
/**
 * User: Script
 * Date: 20.12.2017
 * Time: 6:51
 */

namespace PHPDesignPatterns\Structural\Composite\FormRender;


class Form implements RenderableInterface
{
    private $elements = array();

    public function render(): string
    {
        $formCode = '<form>';

        foreach ($this->elements as $element) {
            $formCode .= $element->render();
        }

        $formCode .= '</form>';

        return $formCode;
    }

    public function addElement(RenderableInterface $element)
    {
        $this->elements[] = $element;
    }
}