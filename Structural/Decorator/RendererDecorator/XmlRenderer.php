<?php
/**
 * User: Script
 * Date: 20.12.2017
 * Time: 10:03
 */

namespace PHPDesignPatterns\Structural\Decorator\RendererDecorator;


class XmlRenderer extends RendererDecorator
{
    public function renderData(): string
    {
        $doc = new \DOMDocument();
        $data = $this->wrapped->renderData();
        $doc->appendChild($doc->createElement('content', $data));

        return $doc->saveXML();
    }
}